<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

use Illuminate\Support\Facades\Validator;

class AdminproductgroupController extends Controller
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
        return view('admingo/createproductgroup');
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
         $validator = Validator::make($request->all(), [
        'upload' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       
        ]);
           if ($validator->fails()) 
            {
                    return back()->withErrors($validator);
            }

        date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
        $id = auth()->user()->id;
        $status="1";
        
        /*$data= array('group_name' => $request->grpname,
        'group_desc' => $request->grpdesc,
         'product_group_image' => $request->upload
        ); */
     
        $fileNamewithext1=$request->file('upload')->getClientOriginalName();
        $fileNamewithext = preg_replace('/\s+/', '_', $fileNamewithext1); 
        $fileName=pathinfo($fileNamewithext,PATHINFO_FILENAME);
        $fileetx=$request->file('upload')->getClientOriginalExtension();
        $fileNameToUpload = "denora_productgroup_image_".time();
        $fileNameToUpload .= ".png";
        // $fileNameToUpload=$fileName .'.'. time(). '.' . $fileetx;

        $path=$request->file('upload')->storeAs('public/documents',$fileNameToUpload);

        $values = array('group_name' => $request->input('grpname'),'group_desc' => $request->input('grpdesc'),'status' => $status,'created_date' => $curr_date,'created_ip' => $ip,'created_by'=> $id,'product_group_image' => $fileNameToUpload);
        DB::table('tbl_product_group')->insert($values);
        Session::flash('flash_message','successfully saved.');
         return redirect('/createproductgroup');
    }        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //$value123 = DB::table('tbl_product_group')->select('*')->paginate(10);

        $value123 = DB::table('tbl_product_group')

        ->select('tbl_product_group.status','tbl_product_group.product_group_id','tbl_product_group.created_by','tbl_product_group.group_name','tbl_product_group.product_group_image','users.id','users.name')

            ->join('users','users.id','=','tbl_product_group.created_by')

            //->where(['something' => 'something', 'otherThing' => 'otherThing'])
            ->paginate(10);


       // $tbl_content=tbl_content::orderBy('id','asc')->paginate(10);
        // return $value123;
        return view('admingo/viewproductgroup')->with('value123',$value123);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // $task = Adminproductgroup::findOrFail($id);

        $tbl_content = DB::table('tbl_product_group')->select('*')->where('product_group_id',$id)->get();

       // return $tbl_content;

        return view('admingo/editproductgroup')->with('tbl_content',$tbl_content);
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
         if($request->hasFile('upload')==null)
        {

             $pgname=$request->input('progrupname');
            
            DB::update('update tbl_product_group set group_name = ? , mod_date = ?, mod_by=?, mod_ip=?  where product_group_id = ?', [$pgname,$curr_date,$id1,$ip,$id]);

            
            Session::flash('flash_message','successfully updated.');
         return redirect('/admingo');
      
        }
        else
        {
             $validator = Validator::make($request->all(), [
            'upload' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       
            ]);
            if ($validator->fails()) 
            {
                    return back()->withErrors($validator);
            }
            $fileNamewithext1=$request->file('upload')->getClientOriginalName();
            $fileNamewithext = preg_replace('/\s+/', '_', $fileNamewithext1); 
            $fileName=pathinfo($fileNamewithext,PATHINFO_FILENAME);
            $fileetx=$request->file('upload')->getClientOriginalExtension();
            $fileNameToUpload = "denora_productgroup_image_".time();
            $fileNameToUpload .= ".png";
            // $fileNameToUpload=$fileName .'.'. time(). '.' . $fileetx;

            $path=$request->file('upload')->storeAs('public/documents',$fileNameToUpload);

            $pgname=$request->input('progrupname');
            

            DB::update('update tbl_product_group set group_name = ? ,product_group_image=?,  mod_date = ?, mod_by=?, mod_ip=?  where product_group_id = ?', [$pgname,$fileNameToUpload,$curr_date,$id1,$ip,$id]);

 
            Session::flash('flash_message','successfully updated.');
         return redirect('/admingo');
      

     
      
        }
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
