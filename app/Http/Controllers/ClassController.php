<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PaytmWallet;
use App\Transaction;
use App\Package;
use App\User;
use App\Order;
use Auth;
use App\Routine;

class ClassController extends Controller
{
    // For class page
    public function class(){
        if (Auth::check()){
          $active_package =   auth()->user()->plan;
          $video          =   Routine::where('package_id','=',$active_package['package_id'])->where('days','=',$active_package['days'])->first();

          return view('class.class',compact('video'));

        }
        else{
        return view('class.index');
      }
    }

    public function confirm_package($id){
      return view('class.confirm_package');
    }
    
    public function package_purchase(Request $request,$id){
        $request->session()->put('id', $id);

        $package    = Package::find($id); 
        $payment    = PaytmWallet::with('receive');
        // GENERATA ORDER ID

        $new_order  = Order::create(['user_id'=>$request->user()->id]);
        $payment->prepare(['order' => $new_order->id,'user' => $request->user()->id,'mobile_number' => $request->user()->mobile,'email' => $request->user()->email, 'amount' => $package->price,'callback_url' => 'http://localhost:8000/packages']);
        return $payment->receive();
    }


    public function paymentCallback(Request $request)
    {
        $transaction = PaytmWallet::with('receive');
        $response       =   $transaction->response(); // To get raw response as array
        $newTransaction =   Transaction::create(['order_id'=>$response['ORDERID'],'txnid'=>$response['TXNID'],'txnamount'=>$response['TXNAMOUNT'],'banktxnid'=>$response['BANKTXNID'],'txndate'=>$response['TXNDATE'],'status'=>$response['STATUS'],'bankname'=>$response['BANKNAME'],'gatewayname'=>$response['GATEWAYNAME']]);
        if($transaction->isSuccessful()){
            $user               = User::find($request->user()->id);
            $user->package_id   = session('id'); 
            $user->save();
            \Mail::to($request->user()['email'],$request->user()['first-name'])->send(new PaymentSuccessful());# Take response
            return "Transaction Is Successful";

          }else if($transaction->isFailed()){
            \Mail::to($request->user()['email'],$request->user()['first-name'])->send(new PaymentFailed($response));
            return "Transaction is Failed";
          //Transaction Failed
        }else if($transaction->isOpen()){
            return "Transaction Being Done";
          //Transaction Open/Processing
        }

    }
}
