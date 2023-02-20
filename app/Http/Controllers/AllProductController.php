<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AllProductController extends Controller
{
    public function productbycat($name){

        $categories = Category::all();
        // $products = Product::where('status',1)->where('category',$id)->limit(10)->get();

$products = Product::where('category',$name)->where('status',1)->get();
// dd($products );
        return view('user.pages.product_by_cat',compact('categories','products'));
    }
}
