<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

class CustomcodeController extends Controller
{
    public function inactive($id)
    {
        $data1 = DB::select("UPDATE `tbl_product_sku` SET  status=0 WHERE `product_sku_id`=".$id."");

       // Session::flash('flash_message','successfully updated.');
            return redirect('/productsknumber/show');
    }
    public function active($id)
    {
        $data1 = DB::select("UPDATE `tbl_product_sku` SET  status=1 WHERE `product_sku_id`=".$id."");

       // Session::flash('flash_message','successfully updated.');
            return redirect('/productsknumber/show');
    }
    public function activatecate($id)
    {
        $data1 = DB::select("UPDATE `tbl_product_category` SET  status=1 WHERE `sk_category_id`=".$id."");

       // Session::flash('flash_message','successfully updated.');
            return redirect('/productscategory/show');
    }
    public function inactivatecate($id)
    {
        $data1 = DB::select("UPDATE `tbl_product_category` SET  status=0 WHERE `sk_category_id`=".$id."");

       // Session::flash('flash_message','successfully updated.');
            return redirect('/productscategory/show');
    }
}
