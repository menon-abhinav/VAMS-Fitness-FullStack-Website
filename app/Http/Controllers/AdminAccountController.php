<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;

class AdminAccountController extends Controller
{
      // Get Request on Admin's Login Page
     public function get_adminLogin(){
        return view('admin.login');
    }

    // Post Request on Admin's Login Page
    public function post_adminLogin(Request $request){
        $email      = $request->input('email');
        $password   = $request->input('password');

        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            
                if (Auth::user()->user_type == 1){
                        return redirect()->route('admin');
                    }

                else{
                    Auth::logout();
                    return redirect('/login');
                }
            }

        return 'error';
    }
   //
}
