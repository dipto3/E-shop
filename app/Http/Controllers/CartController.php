<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Category;



use Brian2694\Toastr\Facades\Toastr;

use RealRashid\SweetAlert\Facades\Alert;
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
   alert::success('Product in cart');
   Toastr::success('Product in cart ', '', ["positionClass" => "toast-top-right"]);
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

   Alert::success('Product in cart','Success');
   Toastr::success('Product in cart', 'Success!', ["positionClass" => "toast-top-right"]);
   return redirect()->back();
}
     
     }else{

        return redirect('login');
     }
  
   }

   public function remove_cart($id){
      Alert::success('Cart item removed');
      $delete_cart = Cart::find($id);
      $delete_cart->delete();
      return redirect()->back();
   }
   public function view(){

      $categories = Category::all();
 
      
      if(Auth::user()){
        $user_id = Auth::user()->id;
        $carts = Cart::where('user_id', $user_id )->get();
    }else{
        $users_id = Auth::user();
        $carts = Cart::where('user_id', $users_id )->get();
    }

   
      // $users_id = Auth::user()->id;
      // $cart = Cart::where('user_id', $users_id )->get();
      // $carts = Cart::where('product_id', $user_id )->where('user_id', $user_id )->get();

      return view('user.pages.viewcart',compact('categories','carts'));
   }

   public function qty_chng($id,Request $request){


      $up_qty = Cart::find($id);
      $up_qty->qty = $request->qty;
      $up_qty->total_price = $request->qty * $up_qty->price;
      $up_qty->save();
      return redirect()->back();
   }

}
