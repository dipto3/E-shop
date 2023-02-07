<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
{
    public function create(){
        return view('admin.color.create');
    }
    public function index(){
        $colors = Color::all();
        return view('admin.color.index',compact('colors'));
       }
    
    public function store(Request $request)
    {
        $colors = explode(',',$request->color); 
        $color =new Color();
        $color->color=json_encode($colors);
        $color ->save();
         
        return redirect()->back();
    }   
    public function edit($id){
        $color = Color::find($id);
        return view('admin.color.edit',compact('color'));
    }

    public function update(Request $request ,$id){
       
        $colors = explode(',',$request->color); 
        $color = Color::find($id);
        $color->color=json_encode($colors);
        $color ->save();
        return redirect()->back();
    }
    public function destroy($id){
        $color = Color::find($id);
        $color->delete();
        return redirect()->back();
    }
}
