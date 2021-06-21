<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ApiuserviewController extends Controller
{
    public function list($id)
    {
          $data = DB::select("SELECT * FROM `tbl_product_group`
INNER JOIN tbl_product_type ON tbl_product_group.product_group_id=tbl_product_type.product_group_id
WHERE tbl_product_type.product_group_id=$id and tbl_product_type.status=1"); 

         
                    
        return $data;
    
    }
}
