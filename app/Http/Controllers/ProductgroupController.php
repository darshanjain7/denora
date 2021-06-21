<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use DB;

class ProductgroupController extends Controller
{
    function list()
    {
       $tbl_product_group = DB::table('tbl_product_group')
          ->select('*')->orderBy('product_group_id','asc')
          ->get();
        return $tbl_product_group;
    }
}
