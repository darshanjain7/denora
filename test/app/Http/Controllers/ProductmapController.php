<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\tbl_product_group;

use App\tbl_product_type;

use App\tbl_product_master;

class ProductmapController extends Controller
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
         //return view('welcomepage.producttypeview');
     
    /* $data = DB::select("SELECT * FROM `tbl_product_type`
    INNER JOIN tbl_product_master ON tbl_product_type.product_type_id=tbl_product_master.product_type_id
    INNER JOIN tbl_product_sku ON tbl_product_master.product_type_id=tbl_product_sku.product_type_id
    WHERE tbl_product_master.product_type_id=$id")->groupBy('tbl_product_master.product_type_id
    '); */
  /*  if($id==3)
    {
        $data1 = DB::select("SELECT * FROM `tbl_product_type`
    INNER JOIN tbl_product_master ON tbl_product_type.product_type_id=tbl_product_master.product_type_id 
    INNER JOIN tbl_product_group ON tbl_product_group.product_group_id=tbl_product_type.product_group_id  WHERE tbl_product_master.product_type_id=$id");
        return view('welcomepage.microchem')->with('data1',$data1);
         
    }
    else
    { */
$data1 = DB::select("SELECT * FROM `tbl_product_type`
    INNER JOIN tbl_product_master ON tbl_product_type.product_type_id=tbl_product_master.product_type_id 
    INNER JOIN tbl_product_group ON tbl_product_group.product_group_id=tbl_product_type.product_group_id  WHERE tbl_product_master.status=1 and tbl_product_master.product_type_id=$id");
 
    $data2= DB::select("SELECT * FROM `tbl_product_category`
INNER JOIN tbl_product_type ON tbl_product_type.product_type_id=tbl_product_category.product_type_id
WHERE tbl_product_category.status = 1 and tbl_product_type.product_type_id=$id");        

    $data=DB::table('tbl_product_type')
            ->join('tbl_product_master', 'tbl_product_type.product_type_id', '=', 'tbl_product_master.product_type_id')
            ->join('tbl_product_category', 'tbl_product_type.product_type_id', '=', 'tbl_product_category.product_type_id')
            ->join('tbl_product_sku', 'tbl_product_category.sk_category_id', '=', 'tbl_product_sku.product_category_id')
            ->select('tbl_product_type.*','tbl_product_master.*','tbl_product_sku.*')
            ->WHERE('tbl_product_category.product_type_id',$id)->where('tbl_product_category.status',1)->where('tbl_product_sku.status',1)
 //->groupBy('tbl_product_master.product_type_id')
 ->get()->toArray();
       //   print_r($data);die();
       
         
     return view('welcomepage.productmap',compact('data','data1','data2'));



   
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
