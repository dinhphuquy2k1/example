<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class CategoryController extends Controller
{
    function delete(){
        categories::where('id', request()->id)->delete();
        return view('welcome', ['data'=> categories::all()]);
    }
}
