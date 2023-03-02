<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Products;


class MainController extends Controller
{
    public function index(){
        return view('index', [
            'index' => Products::all()
        ]);
    }
}
