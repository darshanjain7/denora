<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

class ProductscategoryController extends Controller
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
        $cards = DB::select("SELECT * FROM `tbl_product_type`");
        //$value123= DB::statement('SELECT * FROM `tbl_product_type` WHERE `product_type_id` NOT IN (SELECT product_type_id FROM tbl_product_master)');
         
             
                  //  return  $cards;
                 return view("admingo.productscategory")->with('tbl_content',$cards);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
        $id = auth()->user()->id;
        $status="1";
        
        /*$data= array('group_name' => $request->grpname,
        'group_desc' => $request->grpdesc,
         'product_group_image' => $request->upload
        ); */
        $protypename=$request->input('protypename');
        $catname=$request->input('catname');
        
       // $content=htmlentities($editordata);

       // return $content;

        $values = array('product_type_id' => $request->input('protypename'),'category_name' => $request->input('catname'),'status' => $status,'c_date' => $curr_date,'c_ip' => $ip,'c_by'=> $id);
        DB::table('tbl_product_category')->insert($values);
        Session::flash('flash_message','successfully saved.');
         return redirect('/productscategory/create');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $value123 = DB::table('tbl_product_category')

         
        ->select('tbl_product_category.sk_category_id','tbl_product_category.category_name','tbl_product_category.product_type_id','tbl_product_category.status','tbl_product_category.c_by','tbl_product_type.product_type_id','tbl_product_type.product_type','users.id','users.name')

           ->join('tbl_product_type','tbl_product_type.product_type_id','=','tbl_product_category.product_type_id')

           ->join('users','users.id','=','tbl_product_category.c_by')

           //->where(['something' => 'something', 'otherThing' => 'otherThing'])
           ->paginate(10);

        return view("admingo.viewproductscategory")->with('value123',$value123);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $value12 = DB::table('tbl_product_type')
        ->select('*')
       ->get();
      

       $tbl_content = DB::table('tbl_product_category')
       
       ->select('tbl_product_category.sk_category_id','tbl_product_category.category_name','tbl_product_category.product_type_id','tbl_product_category.status','tbl_product_category.c_by','tbl_product_type.product_type_id','tbl_product_type.product_type')

       ->join('tbl_product_type','tbl_product_type.product_type_id','=','tbl_product_category.product_type_id')

       
       ->where('tbl_product_category.sk_category_id',$id)->get();

       // return $tbl_content;

       return view('admingo.editproductscategory',compact('value12','tbl_content'));
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
        date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
        $id1= auth()->user()->id;
        $status="1";
        
        /*$data= array('group_name' => $request->grpname,
        'group_desc' => $request->grpdesc,
         'product_group_image' => $request->upload
        ); */
        $protypename=$request->input('protypename');
        $procatname=$request->input('procatname');
         
       // $content=htmlentities($editordata);

       // return $content;

       DB::update('update tbl_product_category set product_type_id = ? , category_name = ?,status = ?, m_date = ?, m_by=?, m_ip=?  where sk_category_id = ?', [$protypename,$procatname,$status,$curr_date,$id1,$ip,$id]);

 
            Session::flash('flash_message','successfully updated.');
            return redirect('/productscategory/show');
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
