<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\tbl_product_group;

class IndexpageController extends Controller
{
     public function index()
    {
        $tbl_product_group = DB::table('tbl_product_group')
          ->select('*')
          ->where('status',1)
          ->orderBy('product_group_id','asc')
           ->get();
          $tbl_content = DB::table('tbl_product_group')->select('*');
       // $tbl_content=tbl_content::orderBy('id','asc')->paginate(10);
        return view('welcomepage.home')->with('tbl_product_group',$tbl_product_group);
    }
}
