<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProducttypeController extends Controller
{
     public function create()
    {
        return view("admingo.producttype");
    }
}
