<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailContactUs;
use App\Http\Requests;
use App\Contact;
use Auth;


class BasicController extends Controller
{
    // For Index Page
    public function index(){
        return view('basic.index');
    }

    // For About Page
    public function about(){
        return view('basic.about');
    }

    // For Contact Page
    public function contact(){
        return view('basic.contact');
    }

    // For Gallery Page
    public function gallery(){
        return view('basic.gallery');
    }
    
    // For Contact Page Submit
    public function post_contact(Requests\ContactUsRequest $request){
        $content    =   ['name'=>$request->input('name'),'email'=>$request->input('email'),'message'=>$request->input('message')];
        $message    =   'There was some error in sending the message';
        if (Auth::check()){
            Contact::create(['user_id'=>$request->user()->id,'message'=>$request->input('message')]);
            $message    = 'Your message has been sent, you will reply in VAMS inbox shortly';
        }
        else{
        \Mail::send(new MailContactUs($content));
        $message    = 'Your message has been sent, you will get a reply in email soon';
        // Actually show a success message
        }
        return redirect()->route('contact',compact('message'));

    }
}
