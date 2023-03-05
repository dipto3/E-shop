<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Cart;
use App\Models\User;
use App\Models\Billing;
use App\Models\Shipdetails;

use Brian2694\Toastr\Facades\Toastr;

class ShippingController extends Controller
{
    public function shipping_form(){
      $foruserid = Auth::user();
      $user_id = $foruserid->id;
      $bill = Billing::where('uid',$user_id)->first();
 
      // $bill = Billing::find($user_id);
      // if(Auth::user()){
      //   $user_id = Auth::user()->id;
      //   $user = Billing::where('uid',$user_id)->first();
      //   $bill = Billing::find($user);;
      // }
        $categories = Category::all();
       
        if(Auth::user()){
          $user_id = Auth::user()->id;
          $carts = Cart::where('user_id', $user_id )->get();
      }else{
          $users_id = Auth::user();
          $carts = Cart::where('user_id', $users_id )->get();
      }
        return view('user.pages.shipping',compact('categories','carts','bill'));
    }
    public function ship_store(Request $request,Billing $bill){
       
        
        $foruserid = Auth::user();
        $user_id = $foruserid->id;
      $user_exist = Shipdetails::where('rcv_uid',$user_id)->get('id')->first();
     
  
      if($user_exist){
        $ship =Shipdetails::find($user_exist)->first();
        $ship->rcv_name = $request->name;
        $ship->rcv_uid = $foruserid->id;
        $ship->rcv_email = $request->email;
        $ship->rcv_phone = $request->phone;
        $ship->rcv_add = $request->add;
        $ship->rcv_city = $request->city;
        $ship->rcv_district = $request->district;
        $ship->zip_code = $request->zip;
        $ship->save();

        Toastr::info('Shipping address saved ', '', ["positionClass" => "toast-top-right"]);
        return redirect('/order');
      }else{
        $ship = new Shipdetails();
        $ship->rcv_name = $request->name;
        $ship->rcv_uid = $foruserid->id;
        $ship->rcv_email = $request->email;
        $ship->rcv_phone = $request->phone;
        $ship->rcv_add = $request->add;
        $ship->rcv_city = $request->city;
        $ship->rcv_district = $request->district;
        $ship->zip_code = $request->zip;
        $ship->save();
        Toastr::info('Shipping address saved ', '', ["positionClass" => "toast-top-right"]);
        return redirect('/order');
        
  
      }
    }
}
