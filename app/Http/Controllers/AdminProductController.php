<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductController extends Controller
{
 
    public function index(){
        return view('restorants.product_create');
    }
    public function store(Request $request){
        return $request;
        return 'a';
    }
}
