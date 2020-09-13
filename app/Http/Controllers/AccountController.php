<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Socialite;
use App\Mail\EmailVerification;
use App\Mail\GoogleLinked;
use App\Mail\GithubLinked;
use App\Mail\DeleteAccount;
use Auth;

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
    public function myaccount(Request $request){
        $user_info                             =   $request->user();
        $user_latest_blog                      =   $user_info->blog()->latest()->first();
        $user_comment                          =   $user_info->comment()->latest()->first();
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
            $new_user->email_verified_at        =   now();
            $new_user->save();
            \Mail::to($new_user['email'],$new_user['first-name'])->send(new GithubLinked());
            Auth::login($new_user);
            return redirect('/');
        }

    }
}
