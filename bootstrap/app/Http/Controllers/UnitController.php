<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use Brian2694\Toastr\Facades\Toastr;
class UnitController extends Controller
{
    public function create(){
        return view('admin.unit.create');
    }

    public function store(Request $request){
        $unit = new Unit();
        $unit->name = $request->name;
        $unit->description = $request->description;

        Toastr::success('Unit Added', '', ["positionClass" => "toast-top-right"]);
        $unit->save();
        return redirect()->back();
    }

    public function index(){
        $units = Unit::all();
        return view('admin.unit.index',compact('units'));
    }

    public function edit($id){
        $unit = Unit::find($id);
        return view('admin.unit.edit',compact('unit'));
    }
    public function update(Request $request, $id){
        $unit = Unit::find($id);
        $unit->name = $request->name;
        $unit->description = $request->description;

        Toastr::success('Unit Updated', '', ["positionClass" => "toast-top-right"]);
        $unit->save();
        return redirect()->back();
    }

    public function destroy($id){
        $unit = Unit::find($id);
        $unit->delete();

        Toastr::warning('Unit Removed', '', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
