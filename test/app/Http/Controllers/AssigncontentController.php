<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\user_contents;

class AssigncontentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admingo.assigncontent");
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
          $user_contents=new user_contents;
          $this->validate($request,[
                'user'=>'required',
                'content_type'=>'required',
               // 'viewtime' => 'date_format:H:i',
               // 'email' => [Rule::unique('users')->ignore($users->id),],  
                'viewtime'=>'required',
                'selectedpdf'=>'required',
                
                
            ]);

        
        date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
        $user_contents->content_id=$request->input('selectedpdf');
        $user_contents->time_limit=$request->input('viewtime');
        $user_contents->user_id=$request->input('user');
         $user_contents->content_type=$request->input('content_type');
         
         $user_contents->content_status="1";
        $user_contents->note=$request->input('note');
       
        $user_contents->c_by=auth()->user()->id;
        $user_contents->c_date=$curr_date;
        $user_contents->c_ip=$ip;
        
        $user_contents->save();
        
        return redirect('/admingo')->with('success','Content Assigned Successfully..!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $user_contents = DB::table('user_contents')->select('*')->leftjoin('users', 'users.id', '=', 'user_contents.user_id')->leftjoin('tbl_contents','tbl_contents.id','=','user_contents.content_id')->paginate(10);
       // $tbl_content=tbl_content::orderBy('id','asc')->paginate(10);
        return view('admingo.view-assigned-contents')->with('user_contents',$user_contents);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
