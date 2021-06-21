<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

class productsknumbercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       // $this->middleware('auth',['except' =>['index','show']]);
        $this->middleware('auth');
        
    }
    public function index()
    {
        $cards = DB::select("SELECT * FROM `tbl_product_category`");
        //$value123= DB::statement('SELECT * FROM `tbl_product_type` WHERE `product_type_id` NOT IN (SELECT product_type_id FROM tbl_product_master)');
         
             
                  //  return  $cards;
                 return view("admingo.createproductsknumber")->with('tbl_content',$cards);
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
        date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
        $id = auth()->user()->id;
        $status="1";
        
        /*$data= array('group_name' => $request->grpname,
        'group_desc' => $request->grpdesc,
         'product_group_image' => $request->upload
        ); */
        $procat=$request->input('procat');
        $sknumber=$request->input('sknumber');
         $sendenquiry=$request->input('send-enquiry');
        $description=$request->input('description');
        
       // $content=htmlentities($editordata);

       // return $content;

        $values = array('product_category_id' =>$procat,'sk_spare' => $sendenquiry,'sku' => $sknumber,'description' => $description,'status' => $status,'created_date' => $curr_date,'created_ip' => $ip,'created_by'=> $id);
        DB::table('tbl_product_sku')->insert($values);
        Session::flash('flash_message','successfully saved.');
         return redirect('/productsknumber');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $value123 = DB::table('tbl_product_sku')

         
        ->select('tbl_product_sku.product_sku_id','tbl_product_sku.product_category_id','tbl_product_sku.sku','tbl_product_sku.description','tbl_product_sku.status','tbl_product_sku.created_by','tbl_product_category.sk_category_id','tbl_product_category.category_name','users.id','users.name')

           ->join('tbl_product_category','tbl_product_category.sk_category_id','=','tbl_product_sku.product_category_id')

           ->join('users','users.id','=','tbl_product_sku.created_by')
           ->orderBy('tbl_product_category.category_name', 'ASC')->get();
           //->where(['something' => 'something', 'otherThing' => 'otherThing'])
           //->paginate(100);

        return view("admingo.viewproductsknumber")->with('value123',$value123);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $value12 = DB::table('tbl_product_category')
        ->select('*')
       ->get();
        // return $progcat;

        $value123 = DB::table('tbl_product_sku')

         
        ->select('tbl_product_sku.product_sku_id','tbl_product_sku.sk_spare','tbl_product_sku.product_category_id','tbl_product_sku.sku','tbl_product_sku.description','tbl_product_sku.status','tbl_product_sku.created_by','tbl_product_category.sk_category_id','tbl_product_category.category_name','users.id','users.name')

           ->join('tbl_product_category','tbl_product_category.sk_category_id','=','tbl_product_sku.product_category_id')

           ->join('users','users.id','=','tbl_product_sku.created_by')
             ->where('tbl_product_sku.product_sku_id',$id)->get();
           //->where(['something' => 'something', 'otherThing' => 'otherThing'])
           //->paginate(100);

        return view("admingo.updatesknumber",compact('value123','value12'));

    
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
        $id1 = auth()->user()->id;
        $status="1";
         $pcat=$request->input('pcat');
             $sknumber=$request->input('sknumber');
              $sendenquiry=$request->input('send-enquiry');
             $description=$request->input('description');
         
            
            
            DB::update('update tbl_product_sku set product_category_id = ? ,sk_spare = ?, sku = ?, description = ?,  mod_date = ?, mod_by=?, mod_ip=?  where product_sku_id = ?', [$pcat,$sendenquiry,$sknumber,$description,$curr_date,$id1,$ip,$id]);

            
            Session::flash('flash_message','successfully updated.');
         return redirect('/productsknumber/show');
      
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
