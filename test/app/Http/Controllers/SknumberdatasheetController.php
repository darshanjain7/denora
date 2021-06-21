<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

use Illuminate\Support\Facades\Validator;

class SknumberdatasheetController extends Controller
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
        $cards = DB::select("SELECT * FROM `tbl_product_sku` WHERE `product_sku_id` NOT IN (SELECT product_sku_id FROM tbl_product_o_m_manual)");
        return view('admingo.createdatasheet')->with('cards',$cards);
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
            'upload' => 'required|mimes:pdf|max:10000',
           
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
            $fileNameToUpload = "denora_data_sheet_pdf_".time();
            $fileNameToUpload .= ".pdf";
            // $fileNameToUpload=$fileName .'.'. time(). '.' . $fileetx;
    
            $path=$request->file('upload')->storeAs('public/documents',$fileNameToUpload);
            //$path=$request->file('upload')->storeAs('public/documents',$fileNameToUpload);
    
            $values = array('product_sku_id' => $request->input('prosk'),'o_m_name' => $request->input('dname'),'status' => $status,'created_date' => $curr_date,'created_ip' => $ip,'created_by'=> $id,'o_m_pdf' => $fileNameToUpload);
            DB::table('tbl_product_o_m_manual')->insert($values);
            Session::flash('flash_message','successfully saved.');
             return redirect('/sknumberdatasheet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $value123 = DB::table('tbl_product_o_m_manual')

         
        ->select('tbl_product_o_m_manual.product_o_m_id','tbl_product_o_m_manual.product_sku_id','tbl_product_o_m_manual.o_m_name','tbl_product_o_m_manual.o_m_pdf','tbl_product_sku.product_sku_id','tbl_product_sku.sku','tbl_product_o_m_manual.created_by','users.id','users.name')

           ->join('tbl_product_sku','tbl_product_sku.product_sku_id','=','tbl_product_o_m_manual.product_sku_id')
           ->join('users','users.id','=','tbl_product_o_m_manual.created_by')
         
            ->orderBy('tbl_product_o_m_manual.o_m_name', 'ASC')->get();
           //->where(['something' => 'something', 'otherThing' => 'otherThing'])
           //->paginate(100);

        return view("admingo.viewsknumberdatasheet")->with('value123',$value123);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $value12 = DB::select("SELECT * FROM `tbl_product_sku` WHERE `product_sku_id` NOT IN (SELECT product_sku_id FROM tbl_product_o_m_manual)");
        //return  $value12;
             
       
              $tbl_content = DB::table('tbl_product_o_m_manual')
              
              ->select('tbl_product_o_m_manual.product_o_m_id','tbl_product_o_m_manual.product_sku_id','tbl_product_o_m_manual.o_m_name','tbl_product_o_m_manual.o_m_pdf','tbl_product_sku.product_sku_id','tbl_product_sku.sku')
       
              ->join('tbl_product_sku','tbl_product_sku.product_sku_id','=','tbl_product_o_m_manual.product_sku_id')
       
              
              ->where('tbl_product_o_m_manual.product_o_m_id',$id)->get();
       
              // return $tbl_content;
       
              return view('admingo.editsknumberdatasheet',compact('value12','tbl_content'));
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

             $drowingname=$request->input('drowingname');
               $sknumber=$request->input('sknumber');
            
            DB::update('update tbl_product_o_m_manual set product_sku_id = ? ,o_m_name=?,  mod_date = ?, mod_by=?, mod_ip=?  where product_o_m_id = ?', [$sknumber,$drowingname,$curr_date,$id1,$ip,$id]);

            
            Session::flash('flash_message','successfully updated.');
         return redirect('/sknumberdatasheet/show');
      
        }
        else
        {
            
             $drowingname=$request->input('drowingname');
               $sknumber=$request->input('sknumber');
               
            $validator = Validator::make($request->all(), [
                'upload' => 'required|mimes:pdf|max:10000',
               
                ]);
            if ($validator->fails()) 
            {
                    return back()->withErrors($validator);
            }
           
            $fileNamewithext1=$request->file('upload')->getClientOriginalName();
            $fileNamewithext = preg_replace('/\s+/', '_', $fileNamewithext1); 
            $fileName=pathinfo($fileNamewithext,PATHINFO_FILENAME);
            $fileetx=$request->file('upload')->getClientOriginalExtension();
            $fileNameToUpload = "denora_data_sheet_pdf_".time();
            $fileNameToUpload .= ".pdf";
            // $fileNameToUpload=$fileName .'.'. time(). '.' . $fileetx;
    
            $path=$request->file('upload')->storeAs('public/documents',$fileNameToUpload);
         
            DB::update('update tbl_product_o_m_manual set product_sku_id = ? ,o_m_name=?,  mod_date = ?, mod_by=?, mod_ip=?, o_m_pdf=?  where product_o_m_id = ?', [$sknumber,$drowingname,$curr_date,$id1,$ip,$fileNameToUpload,$id]);

          
 
            Session::flash('flash_message','successfully updated.');
            return redirect('/sknumberdatasheet/show');
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
