<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

use Brian2694\Toastr\Facades\Toastr;
class CategoryController extends Controller
{
    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
       
        $category->save();
        
        return redirect()->back();
    }

    public function index(){
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;

       
        $category->save();
        Toastr::success('Category Updated', '', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        Toastr::warning('Category Removed', '', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
