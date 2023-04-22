<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
class SubscriberController extends Controller
{
    public function store(Request $request){

        $request->validate(
            [
                'subs_email'=>'required|unique:subscribers',
                
            ],
            [
                'subs_email.required'=>'Email is required',
                'subs_email.unique'=>'Email Already Exist',
               
            ]
    );

    $subs = new Subscriber();
    $subs->subs_email = $request->email;
    

    $subs->save();

    return response()->json([
        'status'=>'success',
    ]);
    }
}
