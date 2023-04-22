<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
class BannerController extends Controller
{
    public function add(){

        return view('admin.banner.add');
    }

    public function store(Request $request){

        $banner = new Banner();
        $banner->heading =$request-> heading;
        $banner->description = $request->description;
        // if ($imagee = $request->file('image')) {
        //     $destinationPath = 'storage/bannerimg/';
        //     $profileImage = date('YmdHis') . "." . $imagee->getClientOriginalExtension();
        //     $imagee->move($destinationPath, $profileImage);
        //     $banner['image'] = "$profileImage";
        // }
        $banner->save();

         return redirect()->back();

    }

    public function index(){

        $banners = Banner::all();

        return view('admin.banner.index',compact('banners'));
    }

    public function edit($id){

        $banner = Banner::find($id);

        return view('admin.banner.edit',compact('banner'));

    }
    public function update(Request $request,$id){
        $banner = Banner::find($id);
        $banner->heading =$request->heading;
        $banner->description = $request->description;
        // if ($imagee = $request->file('image')) {
        //     $destinationPath = 'storage/bannerimg/';
        //     $profileImage = date('YmdHis') . "." . $imagee->getClientOriginalExtension();
        //     $imagee->move($destinationPath, $profileImage);
        //     $banner['image'] = "$profileImage";
        // }
        $banner->save();

         return redirect()->back();

    }

    public function  destroy($id){
        $banner = Banner::find($id);
        $banner->delete();
        return redirect()->back();
    }

}
