<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Shipdetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShippingController extends Controller
{
    public function form()
    {
        $categories = Category::all();
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id)->get();
        } else {
            $carts = [];
        }
        $settings = DB::table('settings')->get();
        $setting = [];
        foreach ($settings as $key => $value) {
            $setting[$value->name] = $value->value;
        }

        return view('user.pages.shipping_add', compact('categories', 'setting', 'carts'));
    }

    public function ship_store(Request $request)
    {
        $foruserid = Auth::user();
        $user_id = $foruserid->id;
        $user_exist = Shipdetails::where('rcv_uid', $user_id)->get('id')->first();
        if ($user_exist) {
            $ship = Shipdetails::find($user_exist)->first();
            $ship->update([
                'rcv_name' => $request->name,
                'rcv_uid' => $foruserid->id,
                'rcv_email' => $request->email,
                'rcv_phone' => $request->phone,
                'rcv_add' => $request->add,
                'rcv_city' => $request->city,
                'rcv_district' => $request->district,
                'zip_code' => $request->zip
            ]);
            return redirect('/checkout');
        } else {
            $ship = Shipdetails::create([
                'rcv_name' => $request->name,
                'rcv_uid' => $foruserid->id,
                'rcv_email' => $request->email,
                'rcv_phone' => $request->phone,
                'rcv_add' => $request->add,
                'rcv_city' => $request->city,
                'rcv_district' => $request->district,
                'zip_code' => $request->zip
            ]);
            return redirect('/checkout');
        }
    }
}
