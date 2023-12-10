<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Hotdeal;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function frontpage()
    {
        $categories = Category::all();
        $hotdeals = Hotdeal::all();
        $hotdeal = Product::where('hot_deal', 1)->get();

        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id)->get();
            //   dd($carts);
        } else {
            $carts = [];
        }

        $allProduct = Product::where('status', 1)->limit(6)->get();

        $products = DB::table('products')->where('status', 1)
            ->orderBy('products.id', 'DESC')
            ->get();

        $settings = DB::table('settings')->get();
        $setting = [];
        foreach ($settings as $key => $value) {
            $setting[$value->name] = $value->value;
        }
        $result['setting'] = $setting;

        $data = [
            'setting' => $setting,
        ];

        return view('user.home', compact('categories', 'hotdeals', 'hotdeal', 'carts', 'setting', 'products', 'allProduct'));
    }

    public function hotdeal()
    {
        $categories = Category::all();
        $products = Product::where('status', 1)->where('hot_deal', 1)->get();
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
        // $hotdeal = Product::where('hot_deal',1)->get();
        return view('user.pages.hotdeal_product', compact('categories', 'products', 'carts', 'setting'));
    }
}
