<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProducthtmlController extends Controller
{
     public function create()
    {
        return view("admingo.producthtml");
    }
}
