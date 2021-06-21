<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ProductskudetailsController extends Controller
{
    public function index()
    {
         
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
     /* $data=DB::table('tbl_product_drowing')
            ->join('tbl_product_sku', 'tbl_product_drowing.product_sku_id', '=', 'tbl_product_sku.product_sku_id')
             ->select('tbl_product_drowing.*','tbl_product_sku.*')
            ->WHERE('tbl_product_sku.product_type_id',$id)
            ->get()->toArray(); */


        $data = DB::select("SELECT * FROM `tbl_product_sku`  
INNER JOIN tbl_product_drowing ON tbl_product_sku.product_sku_id=tbl_product_drowing.product_sku_id
WHERE tbl_product_drowing.product_sku_id=$id"); 
        

         $data1 = DB::select("SELECT * FROM `tbl_product_sku`  
INNER JOIN tbl_product_category ON tbl_product_category.sk_category_id=tbl_product_sku.product_category_id
INNER JOIN tbl_product_type ON tbl_product_type.product_type_id=tbl_product_category.product_type_id
INNER JOIN tbl_product_group ON tbl_product_type.product_group_id=tbl_product_group.product_group_id
INNER JOIN tbl_product_o_m_manual ON tbl_product_sku.product_sku_id=tbl_product_o_m_manual.product_sku_id
WHERE tbl_product_o_m_manual.product_sku_id=$id"); 


    
         
     return view('welcomepage.productskudetails',compact('data','data1'));



   
       //  $tbl_content = DB::table('user_contents')->select('*')->join('tbl_contents','user_contents.content_id','=','tbl_contents.id')->where('user_contents.user_content_id',$id);

        // return $tbl_content;
 
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
