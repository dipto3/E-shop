<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

use Brian2694\Toastr\Facades\Toastr;

class AllorderController extends Controller
{
    public function show_order(){

        
        $orders = Order::all();
        return view('admin.orders.allorder',compact('orders'));
    }
}
