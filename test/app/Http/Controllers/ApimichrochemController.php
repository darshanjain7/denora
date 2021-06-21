<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ApimichrochemController extends Controller
{
      public function list($id)
    {
           
     $data1 = DB::select("SELECT * FROM `tbl_microchem`
    INNER JOIN tbl_product_type ON tbl_product_type.product_type_id=tbl_microchem.product_type_id 
    WHERE tbl_microchem.product_type_id=$id");
         
         return $data1;
         
    }  
}
