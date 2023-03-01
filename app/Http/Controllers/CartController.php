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
        $size=$request->size;
        $color = $request->color;
        $user_id = $user->id;

        $product_sizecolor_exist = Cart::where('size','=',$size)->where('color','=',$color)->where('user_id','=',$user_id)->get('id')->first();
if($product_sizecolor_exist){
   
   $cart =Cart::find($product_sizecolor_exist)->first();
   $qty =  $cart->qty;
   $cart->qty =  $qty + $request->qty;
   $cart->total_price = $product->price * $cart->qty;
   $cart->save();
   return redirect()->back();

}else{
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
   $cart->price = $product->price;
   $cart->total_price = $product->price * $request->qty;
   $cart->image = $product->image;
   $cart->save();

   return redirect()->back();
}
     
     }else{

        return redirect('login');
     }
  
   }

   public function remove_cart($id){

      $delete_cart = Cart::find($id);
      $delete_cart->delete();
      return redirect()->back();
   }
}
