<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ApiproductskudetailsController extends Controller
{
     public function list($id)
     {
            $data = DB::select("SELECT * FROM `tbl_product_o_m_manual` 
INNER JOIN tbl_product_drowing ON tbl_product_o_m_manual.product_sku_id=tbl_product_drowing.product_sku_id  
WHERE tbl_product_o_m_manual.product_sku_id=$id and tbl_product_o_m_manual.status=1"); 
            return $data;
     }
}
