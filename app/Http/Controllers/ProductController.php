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
   
    public function store(Request $request){
        $product = new Product();
        $product->name = $request->product;
        $product->cat_id = $request->category_id;
        $product->unit_id = $request->unit_id;
        $product->size_id = $request->size_id;
        $product->color_id = $request->color_id;
        $product->price = $request->price;
        $product->description = $request->description; 


        $images = array();
        if($files =$request->file('file')){
            $i = 0;
            foreach($files as $file){
                $name = $file->getClientOriginalName();
                $fileNameExtract = explode('.',$name);
                $filename =  $fileNameExtract[0];
                $filename.=time();
                $filename.=$i;
                $filename.='.';
                $filename.=$fileNameExtract[1];
                $file->move('image',$filename);
                $images[]=$filename;
                $i++;

            }
            
            $product['image']=implode("|",$images);
            $product ->save();
            return redirect()->back();
        }else{
            echo "error";
        }
        $product ->save();

        return redirect()->back();
    }

    public function index(){
        $products = Product::all();

        return view('admin.product.index',compact('products'));
    }

    public function edit($id){
        $categories = Category::all();
        $category = Category::findOrFail($id);
        $sizes = Size::all();
        $size = Size::findOrFail($id);
        $colors = Color::all();
        $color = Color::findOrFail($id);
        $units = Unit::all();
        $unit = Unit::findOrFail($id);
        $product = Product::find($id);
        return view('admin.product.edit',compact('product','categories','category','size','sizes','colors','color','units','unit'));
    }

}
