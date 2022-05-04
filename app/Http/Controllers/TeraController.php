<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeraController extends Controller
{
    public function index(Request $request){
        return view ('index');
    }
    public function create(Request $request){
        $form=$request->all();
        return view ('thanks');
    }

}
