<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailContactUs;
use App\Http\Requests;
use App\Contact;


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
    public function get_contact(Requests\ContactUsRequest $request){
        $content    =   $request->validated();

        if (Auth::check()){
            Contact::create(['user_id'=>Auth::id(),'message'=>$request->message]);

        }
        else{
        \Mail::send(new MailContactUs($content));
        // Actually show a success message
        }
        return redirect('/contact');

    }
}
