<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function get_query(){
        return view('basic.contact');
    }

    public function post_query(ContactRequest $request){
        $name   = $request->name;
        
        return redirect('/query');
    }
}
