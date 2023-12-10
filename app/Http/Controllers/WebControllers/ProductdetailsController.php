<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductdetailsController extends Controller
{
    // public function index($id){
    //     $sizes = Size::all();
    //     $colors = Color::all();
    //     $categories = Category::all();
    //     $products = Product::where('status',1)->get();
    //     $carts = Cart::all();
    //     $settings = DB::table('settings')->get() ;
    //     $setting = array();
    //     foreach ($settings as $key => $value) {
    //         $setting[$value->name] = $value->value;
    //     }

    //     $result['setting'] = $setting;

    //     $data = [
    //         'setting' => $setting ,
    //     ] ;

    //     $hotdeal = Product::where('hot_deal',1)->get();
    //
    // }

    public function viewdetails($id)
    {
        $settings = DB::table('settings')->get();
        $setting = [];
        foreach ($settings as $key => $value) {
            $setting[$value->name] = $value->value;
        }

        $result['setting'] = $setting;

        $data = [
            'setting' => $setting,
        ];

        $products = Product::findOrFail($id);
        $sizes = Size::find($products->size);
        $categories = Category::all();
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id)->get();
        } else {
            $carts = [];
        }

        return view('user.pages.productdetails', compact('products', 'setting', 'categories', 'carts', 'sizes'));
    }
}
