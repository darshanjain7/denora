<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use   App\Users;

use   App\tbl_content;
class AdmingoController extends Controller
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
         // $total_users = Users::where('user_role', '!=', '1')->count();
          //$activeusers = Users::where('user_role', '!=', '1')->where('user_status', '=', '1')->count();
          //$inactiveusers = Users::where('user_role', '!=', '1')->where('user_status', '=', '0')->count();
          //$totaldocs = tbl_content::count();


          //$total_projects1 = survey::count();
          //$unapprove=survey::where('status','0')->count();
         // $approve=survey::where('status','1')->count();

          //return view('admingo.dashboard')->with(['total'=>$total_users,'totaldocs'=>$totaldocs,'activeusers'=>$activeusers,'inactiveusers'=>$inactiveusers]);
          return view('admingo.dashboard');
       
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
