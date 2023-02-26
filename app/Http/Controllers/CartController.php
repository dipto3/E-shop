<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
   public function cart_store(Request $request, $id){
     if(Auth::id()){

        $user = Auth::user();
        $product = Product::find($id);

        $cart = new Cart;
        $cart->name =  $user->name;
        $cart->user_id =  $user->id;
        $cart->phone =  $user->phone;
        $cart->email =  $user->email;
        $cart->address =  $user->address;
        $cart->qty =  $request->qty;
        $cart->size =  $request->size;
        $cart->color =  $request->color;
        $cart->product_name = $product->name;
        $cart->product_id = $product->id;
        $cart->price = $product->price * $request->qty;
        $cart->image = $product->image;
        $cart->save();

        return redirect()->back();
     }else{

        return redirect('login');
     }
     
      
   }
}
