<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use PaytmWallet;

use App\User;
use App\Order;
use Socialite;
use App\Mail\EmailVerification;
use App\Mail\GoogleLinked;
use App\Mail\GithubLinked;
use App\Mail\TwitterLinked;

use App\Mail\DeleteAccount;
use Auth;

class AccountController extends Controller
{
    // Get Request on Register Page 
    public function get_register(){
        return view('account.register');
    }

    // Post Request on Register Page (Creating New User)
    public function post_register(Requests\RegisterRequest $request){
        $new_user   =   User::create(['first-name'=>$request->get('first-name'),'last-name'=>$request->get('last-name'),'email'=>$request->get('email'),'password'=>PASSWORD_HASH($request->get('password'),PASSWORD_BCRYPT),'mobile'=>$request->get('mobile')]);
        \Mail::to($new_user['email'],$new_user['first-name'])->send(new EmailVerification($new_user));
        return redirect('/register')->withSuccess('Your account has been created please verify it');
    }

    // Get Request on Login Page
    public function get_login(){
        return view('account.login');
    }

    // Post Request on Login Page
    public function post_login(Requests\LoginRequest $request){
        if(\Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
                if (\Auth::user()->email_verified_at != Null)
                    return redirect('/');
                else{
                    \Auth::logout();
                    return redirect('/login')->with('verify','Please Verify your account first');
                }
        }
            return redirect()->back()->withErrors(array('credentials' => 'Username or Password is Wrong'));
    }

    // Get Request on logout page
    public function get_logout(){
        \Auth::logout();
        return redirect('/');
    }

    // For Verifying Email ID
    public function verify($token){
        $user                       =   User::find(decrypt($token));
        $user->email_verified_at    =   now();
        $user->save();
        return redirect('/login')->with('verify','Your Account has been verified, please log in');

    }

    // For Delete account
    public function delete($token, Request $request){
        $user                       =   User::find(decrypt($token));
   
        // If requesting user is the owner of the blog
        if ($request->user() == $user){
            \Mail::to($user['email'],$user['first-name'])->send(new DeleteAccount($user));
            $user->delete();
            return "Your account has been deleted";
        }
        return "Please go to account section and click on delete account";

    }

    // Get Request on My Account Page
    public function get_myaccount(Request $request){
        $user_info                             =   $request->user();
        $user_latest_blog                      =   $request->user()->blog->first();
        $user_comment                          =   $request->user()->comment->first();
        $last_transaction                      =   $user_info->transaction()->latest()->first();
        return view('account.myaccount',compact('user_latest_blog','user_info','user_comment','last_transaction'));

    }

    public function google_redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function twitter_redirect(){
        return Socialite::driver('twitter')->redirect();
    }


    public function github_redirect(){
        return Socialite::driver('github')->redirect();
    }




    public function google_status(){
        try{
            $user   =   Socialite::driver('google')->user();
        }
        catch(\Exception $e){
            return redirect('/login');
        }

        $existingUser   =   User::where('email',$user->email)->first();

        if ($existingUser){
            if($existingUser['google_id'] == $user->id){
                Auth::login($existingUser);
                return redirect('/');
            }
            else{
                $existingUser->google_id            =   $user->id;
                $existingUser->email_verified_at    =   now();
                $existingUser->save();
                \Mail::to($existingUser['email'],$existingUser['first-name'])->send(new GoogleLinked());
                Auth::login($existingUser);
                return redirect('/');
            }
        }
        else{
            $new_user                           =   User::create(['first-name'=>$user->name,'email'=>$user->email,'password'=>PASSWORD_HASH(rand(10000000,9999999999),PASSWORD_BCRYPT)]);
            $new_user->google_id                =   $user->id;
            $new_user->mobile               = 0000000000;
            $new_user->email_verified_at        =   now();
            $new_user->save();
            \Mail::to($new_user['email'],$new_user['first-name'])->send(new GoogleLinked());
            Auth::login($new_user);
            return redirect('/');
        }

    }

    public function github_status(){
        try{
            $user   =   Socialite::driver('github')->user();
        }
        catch(\Exception $e){
            return redirect('/login');
        }

        $existingUser   =   User::where('email',$user->email)->first();

        if ($existingUser){
            if($existingUser['github_id'] == $user->id){
                Auth::login($existingUser);
                return redirect('/');
            }
            else{
                $existingUser->github_id            =   $user->id;
                $existingUser->email_verified_at    =   now();
                $existingUser->save();
                \Mail::to($existingUser['email'],$existingUser['first-name'])->send(new GithubLinked());
                Auth::login($existingUser);
                return redirect('/');
            }
        }
        else{
            $new_user                           =   User::create(['first-name'=>$user->name,'email'=>$user->email,'password'=>PASSWORD_HASH(rand(10000000,9999999999),PASSWORD_BCRYPT)]);
            $new_user->github_id                =   $user->id;
            $new_user->mobile               = 0000000000;

            $new_user->email_verified_at        =   now();
            $new_user->save();
            \Mail::to($new_user['email'],$new_user['first-name'])->send(new GithubLinked());
            Auth::login($new_user);
            return redirect('/');
        }

    }



    public function twitter_status(){
        try{
            $user   =   Socialite::driver('twitter')->user();
        }
        catch(\Exception $e){
            return redirect('/login');
        }

        $existingUser   =   User::where('email',$user->email)->first();

        if ($existingUser){
            if($existingUser['twitter_id'] == $user->id){
                Auth::login($existingUser);
                return redirect('/');
            }
            else{
                $existingUser->twitter_id            =   $user->id;
                $existingUser->email_verified_at    =   now();
                $existingUser->save();
                \Mail::to($existingUser['email'],$existingUser['first-name'])->send(new TwitterLinked());
                Auth::login($existingUser);
                return redirect('/');
            }
        }
        else{
            $new_user                           =   User::create(['first-name'=>$user->name,'email'=>$user->email,'password'=>PASSWORD_HASH(rand(10000000,9999999999),PASSWORD_BCRYPT)]);
            $new_user->twitter_id                =   $user->id;
            $new_user->mobile               = 0000000000;
            $new_user->email_verified_at        =   now();
            $new_user->save();
            \Mail::to($new_user['email'],$new_user['first-name'])->send(new TwitterLinked());
            Auth::login($new_user);
            return redirect('/');
        }

    }

        public function vams_wallet(){
            return view('account.vams_wallet');
        }

        public function vams_wallet_update(Request $request){
            $user           = User::find($request->user()->id);
            $amount         = $request->input('amount');
            $new_order      = Order::create(['user_id'=>$request->user()->id]); 
            $payment    = PaytmWallet::with('receive');
            
            $payment->prepare(['order'=>$new_order->id,'user' => $request->user()->id,'mobile_number' => $request->user()->mobile,'email' => $request->user()->email, 'amount' => $amount,'callback_url' => 'http://localhost:8000/status/wallet']); 
            return $payment->receive();   
        }


        public function vams_wallet_update_status(Request $request){
            $transaction = PaytmWallet::with('receive');
            $response       =   $transaction->response(); // To get raw response as array
            
            return $response;
        }

        public function get_contactStatus(){
            $contacts = Auth::user()->contact;
            return view('basic.contactstatus',compact('contacts'));
        }



    

}
