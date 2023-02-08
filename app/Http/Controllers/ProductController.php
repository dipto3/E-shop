<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Size;
use App\Models\color;
use App\Models\unit;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(){
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();
        $units = Unit::all();
        return view('admin.product.create',compact('categories','sizes','colors','units'));
    }
   
}
