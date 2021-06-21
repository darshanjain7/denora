<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ProductcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data1 = DB::select("SELECT * FROM `tbl_product_type`
 INNER JOIN tbl_product_group ON tbl_product_group.product_group_id=tbl_product_type.product_group_id  
    INNER JOIN tbl_product_category ON tbl_product_type.product_type_id=tbl_product_category.product_type_id
    INNER JOIN tbl_product_sku ON tbl_product_category.sk_category_id=tbl_product_sku.product_category_id
    WHERE tbl_product_sku.product_category_id=$id GROUP BY tbl_product_sku.product_category_id");
    
        
          $data=DB::table('tbl_product_category')
             ->join('tbl_product_sku', 'tbl_product_category.sk_category_id', '=', 'tbl_product_sku.product_category_id')
              ->WHERE('tbl_product_sku.product_category_id',$id)
 //->groupBy('tbl_product_master.product_type_id')
 ->get()->toArray();
       //   print_r($data);die();
     return view('welcomepage.productcategory',compact('data','data1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
