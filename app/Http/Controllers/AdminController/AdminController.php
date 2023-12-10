<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subscribe;
use App\Models\User;
use DB;

class AdminController extends Controller
{
    public function dashboard()
    {

        $categories = Category::all();
        $products = Product::where('status', 1)->get();
        $totalproducts = Product::where('status', 1)->count();
        $hotdealproducts = Product::where('hot_deal', 1)->count();
        $totalusers = User::count();
        $totalcategory = Category::count();
        $deactiveproducts = Product::where('status', 0)->count();

        return view('admin.dashboard', compact('totalproducts', 'totalusers', 'deactiveproducts', 'hotdealproducts', 'totalcategory'));
    }

    public function subscribe()
    {
        // $result = array();
        // $result['subscribe'] = DB::table('subscribes')->get();
        $subscribes = Subscribe::all();

        return view('admin.subscribe.index', compact('subscribes'));
    }

    public function subs_delete($id)
    {
        $subscribe = Subscribe::find($id);
        $subscribe->delete();

        return redirect()->back();
    }
}
