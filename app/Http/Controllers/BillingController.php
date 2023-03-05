<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Billing;
use Illuminate\Support\Facades\Auth;

class BillingController extends Controller
{
    
   public function form(){
    $categories = Category::all();
 
    if(Auth::user()){
      $user_id = Auth::user()->id;
      $carts = Cart::where('user_id', $user_id )->get();
  }else{
      $users_id = Auth::user();
      $carts = Cart::where('user_id', $users_id )->get();
  }

    return view('user.pages.billing',compact('categories','carts'));
   }
   public function store(Request $request){

    $foruserid = Auth::user();
    $user_id = $foruserid->id;

    $billing = new Billing();
    $billing->name = $request->name;
    $billing->uid = $foruserid->id;
    $billing->email = $request->email;
    $billing->phone = $request->phone;
    $billing->add = $request->address ;
    $billing->city = $request->city;
    $billing->district = $request->district;
    $billing->zip_code = $request->zip;
    $billing->save();

    return redirect()->back();
   }
}
