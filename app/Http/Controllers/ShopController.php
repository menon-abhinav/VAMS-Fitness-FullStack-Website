<?php

namespace App\Http\Controllers;

use App\Shop;
use Auth;
use App\Cart;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function get_shop(){
        $shops = Shop::all();
        return view('shop.index',compact('shops'));
    }

    public function addToCart($id){
        $product = Shop::find($id);
        $cart = Auth::user()->cart;

        if ($cart!=null){
        $cart_items = unserialize($cart['cart']);
        $cart_items[$product->id] = 1;
        $update_cart = serialize($cart_items) ;
        $cart->cart= $update_cart;
        $cart->save(); 
        }

        else{
            $new_user_cart = Cart::create(['user_id'=>Auth::id(),'cart'=>serialize([$product_id=>1])]);
        }

        return redirect()->back();
        
    }
}
