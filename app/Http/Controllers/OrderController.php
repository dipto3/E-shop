<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Shipdetails;
use DB;
use Session;
use Stripe;
use Brian2694\Toastr\Facades\Toastr;

use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order_form(){
    
      
        $categories = Category::all();
        $users = Auth::user();
        if(Auth::user()){
          $user_id = Auth::user()->id;
          $carts = Cart::where('user_id', $user_id )->get();
      }else{
          $users_id = Auth::user();
          $carts = Cart::where('user_id', $users_id )->get();
      }
        return view('user.pages.oder',compact('categories','carts','user_id','users'));

    }

    public function cod_order(Request $request){
        $user = Auth::user();
        $userid = $user->id;
 
 
    $sdata = Shipdetails::where('rcv_uid',$userid)->first();
    // dd($sdata);
        $udata = Cart::where('user_id',$userid)->get();
       
    // dd($sdata);

    foreach($udata as $data){
        $order = new Order;
        $order->name = $sdata->rcv_name;
        $order->email = $sdata->rcv_email;
        $order->phone = $sdata->rcv_phone;
        $order->zip_code = $sdata->zip_code;
        $order->address = $sdata->rcv_add;
        $order->city = $sdata->rcv_city;
        $order->district = $sdata->rcv_district;
        $order->user_id = $sdata->rcv_uid;
        $order->product_name = $data->product_name;
        $order->product_id = $data->product_id;
        $order->qty = $data->qty;
        $order->size = $data->size;
        $order->color = $data->color;
        $order->total_price = $data->total_price;
        $order->image = $data->image;
        $order->payment_status = 'cash on delivery';
        $order->delivery_status = 'processing';
        $order->save();

        $cart_id = $data->id;
        $cartdlt = Cart::find( $cart_id );
        $cartdlt->delete();
       
    }
    Toastr::success('Order placed ', '', ["positionClass" => "toast-top-right"]);
   return redirect()->back();
   
    }

    public function stripe($total_cart_price){

        $categories = Category::all();
 
        if(Auth::user()){
          $user_id = Auth::user()->id;
          $carts = Cart::where('user_id', $user_id )->get();
      }else{
          $users_id = Auth::user();
          $carts = Cart::where('user_id', $users_id )->get();
      }
        return view('user.pages.stripe',compact('total_cart_price','categories','carts'));
    }

    public function stripePost(Request $request,$total_cart_price)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $total_cart_price * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thanks for payment" 
        ]);
      
        $user = Auth::user();
        $userid = $user->id;
 
 
    $sdata = Shipdetails::where('rcv_uid',$userid)->first();
    // dd($sdata);
        $udata = Cart::where('user_id',$userid)->get();
       
    // dd($sdata);

    foreach($udata as $data){
        $order = new Order;
        $order->name = $sdata->rcv_name;
        $order->email = $sdata->rcv_email;
        $order->phone = $sdata->rcv_phone;
        $order->zip_code = $sdata->zip_code;
        $order->address = $sdata->rcv_add;
        $order->city = $sdata->rcv_city;
        $order->district = $sdata->rcv_district;
        $order->user_id = $sdata->rcv_uid;
        $order->product_name = $data->product_name;
        $order->product_id = $data->product_id;
        $order->qty = $data->qty;
        $order->size = $data->size;
        $order->color = $data->color;
        $order->total_price = $data->total_price;
        $order->image = $data->image;
        $order->payment_status = 'Paid by card(stripe)';
        $order->delivery_status = 'processing';
        $order->save();
       
        $cart_id = $data->id;
        $cartdlt = Cart::find( $cart_id );
        $cartdlt->delete();
       
    }
    Toastr::success('Your order is placed  ', 'Payment successful!', ["positionClass" => "toast-top-right"]);
        Session::flash('success', 'Payment successful!');
              
        return redirect('/order');
    }


    public function order_list(){

        $categories = Category::all();
 
        if(Auth::user()){
          $user_id = Auth::user()->id;
          $carts = Cart::where('user_id', $user_id )->get();
      }else{
          $users_id = Auth::user();
          $carts = Cart::where('user_id', $users_id )->get();
      }

      $user = Auth::user();
      $userid = $user->id;
      $orderlists = Order::where('user_id',$userid)->get();

        return view('user.pages.orderlist',compact('categories','carts','orderlists'));
    }
    public function order_delete($id){

        $dltorder = Order::find($id);
        $dltorder->delivery_status = 'Order Cancel By User';
        $dltorder->save();
        return redirect()->back();

    }
   
    }



