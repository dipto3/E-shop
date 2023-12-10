<?php

namespace App\Http\Controllers;

use App\Models\Hotdeal;
use App\Models\Page;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\Setting;
// use DB;
use Illuminate\Http\Request;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function login()
    {

        return view('user.login');
    }

    public function home()
    {

        $categories = Category::all();
        $hotdeals = Hotdeal::all();
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id)->get();
            // $wishlists = Wishlist::where('user_id', $user_id)->count();
        } else {
            $users_id = Auth::user();
            $carts = Cart::where('user_id', $users_id)->get();
        }
        $products = Product::orderBy('id', 'DESC')->limit(6)->get();
        $settings = DB::table('settings')->get();
        $setting = array();
        foreach ($settings as $key => $value) {
            $setting[$value->name] = $value->value;
        }

        $result['setting'] = $setting;

        $data = [
            'setting' => $setting,
        ];
        $topsell = Order::with('products')->orderBy('id', 'DESC')->get();


        // $topsell = Order::select('product_id')->orderBy('qty', 'desc')->get('qty');
        // dd($topsell);

        $allProduct = Product::all();
        return view('user.home', compact('categories', 'hotdeals', 'carts', 'setting', 'products', 'topsell', 'allProduct'));
    }
    public function frontpage()
    {

        $categories = Category::all();
        $hotdeals = Hotdeal::all();
        $hotdeal = Product::where('hot_deal', 1)->get();

        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id)->get();
        } else {
            $users_id = Auth::user();
            $carts = Cart::where('user_id', $users_id)->get();
        }

        $allProduct = Product::all();

        $products = DB::table('products')
            ->orderBy('products.id', 'DESC')
            // ->leftJoin('categories', 'products.category', '=', 'categories.name')
            ->get();

        //
        // if(Auth::user()){
        //     $user_id = Auth::user()->id;
        //     $carts = Cart::where('user_id', $user_id )->get();
        // }else{
        //     $users_id = Auth::user();
        //     $carts = Cart::where('user_id', $users_id )->get();
        // }


        //

        // $category = Category::orderBy('id', 'desc')->first();

        $settings = DB::table('settings')->get();
        $setting = array();
        foreach ($settings as $key => $value) {
            $setting[$value->name] = $value->value;
        }
        $result['setting'] = $setting;

        $data = [
            'setting' => $setting,
        ];

        // $topSell = Product::with('order_details')
        // ->selectRaw('products.id , SUM(order_details.product_qty)as total')
        // ->groupBy('products.id')
        // ->orderBy('id', 'DESC')
        // ->take(8)
        // ->get();
        // $topSellProducts = [];
        // foreach($topSell as $top){
        //     $product = Product::findOrfail($top->id);
        //     $product->totalQty = $top->total;
        //     $topSellProducts[] = $product;
        // }

        // $topsell = Order::with('products')->orderBy('id', 'DESC')->get();

        return view('user.home', compact('categories', 'hotdeals', 'hotdeal', 'carts', 'setting', 'products',  'allProduct'));
    }

    public function hotdeal($name)
    {
        $categories = Category::all();
        // $products = Product::where('status',1)->where('category',$id)->limit(10)->get();

        $products = Product::where('status', 1)->where('hot_deal', 1)->get();
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id)->get();
        } else {
            $users_id = Auth::user();
            $carts = Cart::where('user_id', $users_id)->get();
        }
        $settings = DB::table('settings')->get();
        $setting = array();
        foreach ($settings as $key => $value) {
            $setting[$value->name] = $value->value;
        }

        $result['setting'] = $setting;

        $data = [
            'setting' => $setting,
        ];

        // $routeName = $name;

        // $hotdeal = Product::where('hot_deal',1)->get();
        return view('user.pages.hotdeal_product', compact('categories', 'products', 'carts', 'setting'));
    }
}
