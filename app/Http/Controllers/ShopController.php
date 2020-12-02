<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function get_shop(){
        return view('shop.index');
    }
}
