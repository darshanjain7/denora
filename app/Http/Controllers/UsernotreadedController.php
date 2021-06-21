<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\user_content;

use App\tbl_content;

class UsernotreadedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $uid=auth()->user()->id;
          $tbl_content = DB::table('user_contents')->select('*')->join('tbl_contents','tbl_contents.id','=','user_contents.content_id')->where('user_contents.user_id',$uid)->where('user_contents.content_view_status',0)->paginate(10);
       // $tbl_content=tbl_content::orderBy('id','asc')->paginate(10);

        return view('usergo.pendingcontents')->with('tbl_content',$tbl_content);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
      //$tbl_content=tbl_content::find($id);

        $data = DB::select("SELECT * FROM `user_contents`
INNER JOIN tbl_contents ON user_contents.content_id=tbl_contents.id
WHERE user_contents.user_content_id=$id"); 

   
       //  $tbl_content = DB::table('user_contents')->select('*')->join('tbl_contents','user_contents.content_id','=','tbl_contents.id')->where('user_contents.user_content_id',$id);

        // return $tbl_content;
 
       return view('usergo.viewcontent')->with('data',$data);
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
