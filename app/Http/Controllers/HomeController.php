<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('ajaxrequest');
    }

    public function indexPost(Request $request){
        $input = $request->all();
        \Log::info('details ' .$input);

        return response()->json(['success'=>'simple ajax']);
    }
}
