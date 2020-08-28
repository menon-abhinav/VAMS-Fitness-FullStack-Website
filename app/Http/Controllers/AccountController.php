<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Mail\EmailVerification;
use App\Mail\DeleteAccount;

class AccountController extends Controller
{
    // For Register Page
    public function register(){
        return view('account.register');
    }

    // For Creating New User
    public function new_user(Requests\RegisterRequest $request){
        $new_user   =   User::create(['first-name'=>$request->get('first-name'),'last-name'=>$request->get('last-name'),'email'=>$request->get('email'),'password'=>PASSWORD_HASH($request->get('password'),PASSWORD_BCRYPT),'mobile'=>$request->get('mobile')]);
        \Mail::to($new_user['email'],$new_user['first-name'])->send(new EmailVerification($new_user));
        return redirect('/register')->withSuccess('Your account has been created please verify it');
    }

    // For Login Page
    public function login(){
        return view('account.login');
    }

    // For Trying Sigin
    public function loginaccess(Requests\LoginRequest $request){
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

    // For Trying Logout
    public function logout(){
        \Auth::logout();
        return redirect('/');
    }

    // For Verifying Email ID
    public function verify($token){
        $user                       =   User::find(decrypt($token));
        $user->email_verified_at    =   now();
        $user->save();
        return "Your Email has been verified";

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
    public function myaccount(Request $request){
        $user_latest_blog           =   $request->user()->blog()->latest()->first();
        $user_info                  =   $request->user();
        return view('account.myaccount',compact('user_latest_blog','user_info'));

    }
}
