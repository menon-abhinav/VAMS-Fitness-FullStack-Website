<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function get_shop(){
        $shops = Shop::all();
        return view('shop.index',compact('shops'));
    }

    public function addToCart($id){
        $product = Shop::find($id);
        
        
    }
}
