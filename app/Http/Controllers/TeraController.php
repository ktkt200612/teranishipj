<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class TeraController extends Controller
{
    public function index(Request $request){
        return view ('index');
    }
    public function create(Request $request){
        $people = new People;
        $form = $request->all();
        $people->fill($form)->save();
        return view ('thanks');
    }

}
