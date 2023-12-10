<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Size;
use App\Http\Requests\SizeRequest;
use Brian2694\Toastr\Facades\Toastr;

class SizeController extends Controller
{
    public function create()
    {

        return view('admin.size.create');
    }

    public function store(SizeRequest $request)
    {
        $request->validated();
        $sizes = explode(',', $request->name);
        $size = Size::create([
            'name' => json_encode($sizes),
        ]);
        return redirect()->back();
    }

    public function index()
    {

        $sizes = Size::all();
        return view('admin.size.index', compact('sizes'));
    }

    public function edit($id)
    {
        $size = Size::find($id);
        return view('admin.size.edit', compact('size'));
    }

    public function update(Request $request, $id)
    {
        $sizes = explode(',', $request->name);
        $size = Size::where('id', $id)->update([
            'name' =>  json_encode($sizes),
        ]);

        //     $sizes = explode(',',$request->name); 
        //     $size->update([

        //        'size' =>  json_encode($sizes),

        //    ]);
        //    if($size)

        return redirect()->back();
    }

    public function destroy($id)
    {
        $size = Size::find($id);
        $size->delete();
        return redirect()->back();
    }
}
