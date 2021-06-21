<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\tbl_product_group;



class AdmincontentController extends Controller
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
         return view('admingo.createcontent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
       {
        /*if($request->hasFile('doc_upload'))
        {
            //get the image with extension 
              $fileNamewithext=$request->file('doc_upload')->getClientOriginalName();   //get the image name
            $fileName=pathinfo($fileNamewithext,PATHINFO_FILENAME);
            //get image ectension
            $fileetx=$request->file('doc_upload')->getClientOriginalExtension();
            //file name to upload
            $fileNameToUpload=$fileName .'.'. time(). '.' . $fileetx;

            $path=$request->file('doc_upload')->storeAs('public/documents',$fileNameToUpload);

        }
        else
        {
           // $fileNameToUpload='no-image.png';
        } */
        $tbl_content=new tbl_product_group;
         date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
        $tbl_content->group_name=$request->input('grpname');
        $tbl_content->group_desc=$request->input('grpdesc');
        $tbl_content->note=$request->input('note');
        $tbl_content->created_by=auth()->user()->id;
        $tbl_content->created_date=$curr_date;
        $tbl_content->created_ip=$ip;
        
        $tbl_content->product_group_image=$fileNameToUpload;
 
        $tbl_content->save();
        
        return redirect('/admingo')->with('success','Your Content Has Been Saved..!');   
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $tbl_content = DB::table('tbl_product_group')->select('*')->paginate(10);
       // $tbl_content=tbl_content::orderBy('id','asc')->paginate(10);
        return view('admingo.view-content')->with('tbl_content',$tbl_content);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $tbl_content=tbl_content::find($id);
         
        return view('admingo.edit-content-details')->with('tbl_content',$tbl_content);
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
        $tbl_content=tbl_content::find($id);
        
          if($request->hasFile('doc_upload')==null)
        {
           
          date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
         $tbl_content->content_title=$request->input('conttitle');
        $tbl_content->content_type=$request->input('ctype');
        $tbl_content->note=$request->input('note');
        $tbl_content->mod_by=auth()->user()->id;
        $tbl_content->mod_date=$curr_date;
        $tbl_content->mod_ip=$ip;
        
      //  $tbl_content->content=$fileNameToUpload;
 
        $tbl_content->save();
        
        return redirect('/admingo')->with('success','Your Content Has Been Updated..!');
    }
    else
    {
    if($request->hasFile('doc_upload'))
        {
            //get the image with extension 
              $fileNamewithext=$request->file('doc_upload')->getClientOriginalName();   //get the image name
            $fileName=pathinfo($fileNamewithext,PATHINFO_FILENAME);
            //get image ectension
            $fileetx=$request->file('doc_upload')->getClientOriginalExtension();
            //file name to upload
            $fileNameToUpload=$fileName .'.'. time(). '.' . $fileetx;

            $path=$request->file('doc_upload')->storeAs('public/documents',$fileNameToUpload);

        }
          date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
        $tbl_content->content_type=$request->input('ctype');
         $tbl_content->content_title=$request->input('conttitle');
        $tbl_content->note=$request->input('note');
        $tbl_content->mod_by=auth()->user()->id;
        $tbl_content->mod_date=$curr_date;
        $tbl_content->mod_ip=$ip;
        
        $tbl_content->content=$fileNameToUpload;
 
        $tbl_content->save();
        
        return redirect('/admingo')->with('success','Your Content Has Been Updated..!');
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
