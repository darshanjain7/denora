<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

use Illuminate\Support\Facades\Validator;

class ProducttypeController extends Controller
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
         $value123 = DB::table('tbl_product_group')

        ->select('*')->get();

         return view("admingo.producttype")->with('tbl_content',$value123);
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
        $fileNameToUpload = "denora_producttype_image_".time();
        $fileNameToUpload .= ".png";
        // $fileNameToUpload=$fileName .'.'. time(). '.' . $fileetx;

        $path=$request->file('upload')->storeAs('public/documents',$fileNameToUpload);

        $values = array('product_group_id' => $request->input('grpname'),'product_type' => $request->input('protype'),'status' => $status,'created_date' => $curr_date,'created_ip' => $ip,'created_by'=> $id,'product_type_image' => $fileNameToUpload);
        DB::table('tbl_product_type')->insert($values);
        Session::flash('flash_message','successfully saved.');
         return redirect('/producttype');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $value123 = DB::table('tbl_product_type')

         
         ->select('tbl_product_type.product_type_id','tbl_product_type.created_by','tbl_product_type.product_group_id','tbl_product_type.product_type','tbl_product_type.product_type_image','tbl_product_type.status','tbl_product_group.product_group_id','tbl_product_group.group_name','users.id','users.name')

            ->join('tbl_product_group','tbl_product_group.product_group_id','=','tbl_product_type.product_group_id')

            ->join('users','users.id','=','tbl_product_type.created_by')

            //->where(['something' => 'something', 'otherThing' => 'otherThing'])
            ->paginate(10);

         return view("admingo.viewproducttype")->with('value123',$value123);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return $id;
         $value12 = DB::table('tbl_product_group')
         ->select('*')
        ->get();
          //  return $value12;

        $tbl_content = DB::table('tbl_product_type')
        
        ->select('tbl_product_type.product_type_id','tbl_product_type.product_group_id','tbl_product_type.product_type','tbl_product_type.product_type_image','tbl_product_group.product_group_id','tbl_product_group.group_name')
        
         ->join('tbl_product_group','tbl_product_group.product_group_id','=','tbl_product_type.product_group_id')   
        
        ->where('tbl_product_type.product_type_id',$id)->get();

        // return $tbl_content;

        return view('admingo/editproducttype',compact('tbl_content','value12'));
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
         $protypename=$request->input('protypename');
             $grpname=$request->input('grpname');
         if($request->hasFile('upload')==null)
        {

            
            
            DB::update('update tbl_product_type set product_group_id = ? , product_type = ?, mod_date = ?, mod_by=?, mod_ip=?  where product_type_id = ?', [$grpname,$protypename,$curr_date,$id1,$ip,$id]);

            
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
            $fileNameToUpload = "denora_producttype_image_".time();
            $fileNameToUpload .= ".png";
            // $fileNameToUpload=$fileName .'.'. time(). '.' . $fileetx;

            $path=$request->file('upload')->storeAs('public/documents',$fileNameToUpload);

            $pgname=$request->input('progrupname');
            

              DB::update('update tbl_product_type set product_group_id = ? , product_type = ?, product_type_image=?, mod_date = ?, mod_by=?, mod_ip=?  where product_type_id = ?', [$grpname,$protypename,$fileNameToUpload,$curr_date,$id1,$ip,$id]);

 
            Session::flash('flash_message','successfully updated.');
            return redirect('/admingo');
        }
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
