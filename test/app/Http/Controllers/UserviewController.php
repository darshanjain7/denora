<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\tbl_product_group;

use App\tbl_product_type;

class UserviewController extends Controller
{
	 public function index()
    {
        return view('usergo.dashboard');    
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
         $data = DB::select("SELECT * FROM `tbl_product_group`
INNER JOIN tbl_product_type ON tbl_product_group.product_group_id=tbl_product_type.product_group_id
WHERE tbl_product_type.product_group_id=$id and tbl_product_type.status=1"); 

          $data1 = DB::select("SELECT * FROM `tbl_product_group`
                    WHERE  product_group_id=$id"); 

   
       //  $tbl_content = DB::table('user_contents')->select('*')->join('tbl_contents','user_contents.content_id','=','tbl_contents.id')->where('user_contents.user_content_id',$id);

        // return $tbl_content;
 
       return view('welcomepage.producttypeview',compact('data','data1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('welcomepage.producttypeview');
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
