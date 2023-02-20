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
        $product->category = $request->category;
        $product->unit = $request->unit;
        $product->size = $request->size;
        $product->color = $request->color;
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
      
        $sizes = Size::all();
       
        $size = Size::find($id);
        $colors = Color::all();
        $color = Color::find($id);
     
        $units = Unit::all();
     
       
        $product = Product::find($id);

        return view('admin.product.edit',compact('product','categories','sizes','size','colors','color','units'));
    }
    public function update(Request $request,$id){
        // dd($request->all());
        $product =  Product::find($id);
        $product->name = $request->product;
        $product->category = $request->category;
        $product->unit = $request->unit;
        $product->size = $request->size;
        $product->color = $request->color;
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
          
        }else{
            echo "error";
        }
        $product ->save();

        return redirect('/all-product');
    }
    // public function update(Request $request, Product $product)
    // {
    //    $size = explode(",",$request->size_id);
    //    $color = explode(",",$request->color_id);
    //     $update = $product->update([

    //         'name' =>  $request->product,
    //         'cat_id' =>  $request->category_id,

    //         'unit_id' =>  $request->unit_id,
    //         'size_id' =>  (int) json_encode($size),
    //         'color_id' =>  (int) json_encode($color),

    //         'description' => $request->description,
    //         'price' => $request->price,
    //     ]);
    //     if($update)
   
    //     return redirect()->back();
    // }


    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
         return redirect()->back();

    }
    public function change_status(Product $product)
    {
      if($product->status==1){
        $product->update(['status'=>0]);
        }
       else{
        $product->update(['status'=>1]);
        }
       return redirect()->back();
   }



}
