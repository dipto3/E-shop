<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;
use Brian2694\Toastr\Facades\Toastr;
class SizeController extends Controller
{
   public function create(){
    return view('admin.size.create');
   }
   public function index(){
    $sizes = Size::all();
    return view('admin.size.index',compact('sizes'));
   }

   public function store(Request $request)
    {
        $sizes = explode(',',$request->size); 
        $size =new Size();
        $size->size=json_encode($sizes);
        $size ->save();
         
        Toastr::success('Size Added', '', ["positionClass" => "toast-top-right"]);
        return redirect()->back()->with('message','Size added');
    }
    public function edit($id){
        $size = Size::find($id);
        return view('admin.size.edit',compact('size'));
    }
    public function update(Request $request ,$id){
        // $sizes = explode(',',$request->size); 
        // $update = $size->update([
        //     'size' =>  json_encode($sizes),
        // ]);
        // if($update)
        $sizes = explode(',',$request->size); 
        $size = Size::find($id);
        $size->size=json_encode($sizes);
        $size ->save();

        Toastr::success('Size Updated', '', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function destroy($id){
        $size = Size::find($id);
        $size->delete();

        Toastr::warning('Size Removed', '', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    
}
