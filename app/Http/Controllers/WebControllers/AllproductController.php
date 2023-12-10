<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Hotdeal;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AllproductController extends Controller
{
    public function productbycat($name)
    {

        $categories = Category::all();
        // $products = Product::where('status',1)->where('category',$id)->limit(10)->get();

        $products = Product::where('category', $name)->where('status', 1)->get();
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

        $result['setting'] = $setting;

        $data = [
            'setting' => $setting,
        ];

        $routeName = $name;

        $hotdeal = Product::where('hot_deal', 1)->get();

        return view('user.pages.product_by_cat', compact('categories', 'products', 'carts', 'hotdeal', 'setting', 'routeName'));
    }

    public function shop()
    {
        $categories = Category::all();
        $hotdeals = Hotdeal::all();
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id)->get();
        // $wishlists = Wishlist::where('user_id', $user_id)->count();
        } else {
            $carts = [];
        }
        $products = Product::where('status', 1)->get();
        $settings = DB::table('settings')->get();
        $setting = [];
        foreach ($settings as $key => $value) {
            $setting[$value->name] = $value->value;
        }

        $result['setting'] = $setting;

        $data = [
            'setting' => $setting,
        ];

        return view('user.pages.shop', compact('categories', 'hotdeals', 'carts', 'setting', 'products'));
    }
}
