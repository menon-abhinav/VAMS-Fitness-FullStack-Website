<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PaytmWallet;
use App\Transaction;
use App\Package;
use App\User;
use App\Order;
use App\Plan;
use Auth;
use App\Routine;
use App\Mail\PaymentSuccessful;
use App\Mail\PaymentFailed;


class ClassController extends Controller
{
    // For class page
    public function class(){
        if (Auth::check()){
          $active_package =   auth()->user()->plan;

          if ($active_package != null){
          $video          =   Routine::where('package_id','=',$active_package['package_id'])->where('days','=',$active_package['days'])->first();
          $packages        =   null;  
       
        }
        else{
        $video = null;
        $packages        =   Package::all();  
      }
          return view('class.class',compact('video','packages'));

        }
        else{
        return view('class.index');
      }
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
            $package   = Package::find(session('id')); 

            // If user already registered, then just update

            Plan::create(['user_id'=>$user->id,'package_id'=>$package->id,'days'=>$package->days]); 
            \Mail::to($request->user()['email'],$request->user()['first-name'])->send(new PaymentSuccessful($newTransaction));# Take response
            $status = 'Payment Successful'; 
            $redirect = '/class';
            return view('redirect',compact('status','redirect'));

          }else if($transaction->isFailed()){
            \Mail::to($request->user()['email'],$request->user()['first-name'])->send(new PaymentFailed($newTransaction));
            $status = 'Payment Failed';
            $redirect = '/class';
            return view('redirect',compact('status','redirect'));
          //Transaction Failed
        }else if($transaction->isOpen()){
            return "Transaction Being Done";
          //Transaction Open/Processing
        }

    }
}
