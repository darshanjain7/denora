<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;


class ApiproductmapController extends Controller
{
     public function list($id)
  
    { 
        $data1 = DB::select("SELECT * FROM `tbl_product_type`
                INNER JOIN tbl_product_master ON tbl_product_type.product_type_id=tbl_product_master.product_type_id 
                INNER JOIN tbl_product_group ON tbl_product_group.product_group_id=tbl_product_type.product_group_id  WHERE tbl_product_master.status=1 and tbl_product_master.product_type_id=$id");
 
      

        $data=DB::table('tbl_product_type')
            ->join('tbl_product_master', 'tbl_product_type.product_type_id', '=', 'tbl_product_master.product_type_id')
            ->join('tbl_product_category', 'tbl_product_type.product_type_id', '=', 'tbl_product_category.product_type_id')
            ->join('tbl_product_sku', 'tbl_product_category.sk_category_id', '=', 'tbl_product_sku.product_category_id')
            ->select('tbl_product_type.*','tbl_product_master.*','tbl_product_sku.*')
            ->WHERE('tbl_product_category.product_type_id',$id)->where('tbl_product_category.status',1)->where('tbl_product_sku.status',1)
 //->groupBy('tbl_product_master.product_type_id')
 ->get()->toArray();
       //   print_r($data);die();
    

 
  return  $data;
  return $data1;
  
  
   
    
    // print_r($data1);
    
    }
    }
 
