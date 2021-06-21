<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

class ProducthtmlController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      /*  $value123=  DB::table('tbl_product_type')                 
  ->select('product_type_id')
  ->whereNotIn('product_type_id', DB::table('tbl_product_master')->select('product_type_id')->get()->toArray())
  ->get();
*/
$cards = DB::select("SELECT * FROM `tbl_product_type` WHERE `product_type_id` NOT IN (SELECT product_type_id FROM tbl_product_master)");
//$value123= DB::statement('SELECT * FROM `tbl_product_type` WHERE `product_type_id` NOT IN (SELECT product_type_id FROM tbl_product_master)');
 
     
          //  return  $cards;
         return view("admingo.producthtml")->with('tbl_content',$cards);
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
            $grpname=$request->input('grpname');
            $progname=$request->input('progname');
            $editordata=$request->input('editordata');
         
           // $content=htmlentities($editordata);

           // return $content;
    
            $values = array('product_type_id' => $request->input('grpname'),'product_name' => $request->input('progname'),'product_master_image_html_code' => $editordata,'status' => $status,'created_date' => $curr_date,'created_ip' => $ip,'created_by'=> $id);
            DB::table('tbl_product_master')->insert($values);
            Session::flash('flash_message','successfully saved.');
             return redirect('/producthtml/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $value123 = DB::table('tbl_product_master')

         
         ->select('tbl_product_master.product_master_image_html_code','tbl_product_master.status','tbl_product_master.product_name','tbl_product_master.product_master_id','tbl_product_master.product_type_id','tbl_product_master.created_by','tbl_product_type.product_type_id','tbl_product_type.product_type','users.id','users.name')

            ->join('tbl_product_type','tbl_product_type.product_type_id','=','tbl_product_master.product_type_id')

            ->join('users','users.id','=','tbl_product_master.created_by')

            //->where(['something' => 'something', 'otherThing' => 'otherThing'])
            ->paginate(10);

         return view("admingo.viewproducthtml")->with('value123',$value123);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $value12 = DB::select("SELECT * FROM `tbl_product_type` WHERE `product_type_id` NOT IN (SELECT product_type_id FROM tbl_product_master)");


         $tbl_content = DB::table('tbl_product_master')

         
         ->select('tbl_product_master.product_master_image_html_code','tbl_product_master.status','tbl_product_master.product_name','tbl_product_master.product_master_id','tbl_product_master.product_type_id','tbl_product_master.created_by','tbl_product_type.product_type_id','tbl_product_type.product_type')

            ->join('tbl_product_type','tbl_product_type.product_type_id','=','tbl_product_master.product_type_id')

            ->where('tbl_product_master.product_master_id',$id)->get();

       // return $tbl_content;

       return view('admingo/editproducthtml',compact('tbl_content','value12'));
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
        $typname=$request->input('typname');
        $progname=$request->input('progname');
        $editordata=$request->input('editordata');
     
       // $content=htmlentities($editordata);

       // return $content;

       DB::update('update tbl_product_master set product_type_id = ? , product_name = ?, product_master_image_html_code=?, status = ?, mod_date = ?, mod_by=?, mod_ip=?  where product_master_id = ?', [$typname,$progname,$editordata,$status,$curr_date,$id1,$ip,$id]);

 
            Session::flash('flash_message','successfully updated.');
            return redirect('/producthtml/show');
         
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
