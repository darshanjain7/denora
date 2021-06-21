<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use   App\Users;

use DB;

use Auth;

use Session;

use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Hash;

class AdduserdetailsController extends Controller
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

        if (Auth::check())
            {
                  $sess=auth()->user()->id;
                  if($sess!="2")
                    {
                        Session::flush();
                        return redirect('/login');
                    }
            }
    
           
    }



    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         return view('admingo.createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $users=new Users;
          $this->validate($request,[
                'username'=>'required',
                'emailid'=>'required',
                'email' => [Rule::unique('users')->ignore($users->id),],  
                'password'=>'required|confirmed',
                'mobile'=>'required|numeric',
                'cname'=>'required',
                
            ]);

        
        date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
        $users->name=$request->input('username');
        $users->email=$request->input('emailid');
        $pass1=$request->input('password');
        $hashedPassword = Hash::make($pass1);
        $users->password=$hashedPassword;
         $users->user_role="2";
          $users->user_status="1";
        $users->mob_no=$request->input('mobile');
        $users->gender=$request->input('gender');
        $users->comp_name=$request->input('cname');
        $users->note=$request->input('note');
       
        
        $users->created_by=auth()->user()->id;
        $users->created_date=$curr_date;
        $users->c_ip=$ip;
        
        $users->save();
        
        return redirect('/admingo')->with('success','User Created Successfully..!');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
       
        $tbl_content = DB::table('users')->select('*')->where('user_role',2)->paginate(10);
       // $tbl_content=tbl_content::orderBy('id','asc')->paginate(10);

        return view('admingo.view-user')->with('tbl_content',$tbl_content);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         $users=Users::find($id);
         
        return view('admingo.edit-user-details')->with('users',$users);
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
        $users=Users::find($id);
         $this->validate($request,[
                'username'=>'required',
                'emailid'=>'required',
                'email' => [Rule::unique('users')->ignore($users->id),],  
                
                'mobile'=>'required|numeric',
                'cname'=>'required',
                
            ]);
        date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
        $users->name=$request->input('username');
        $users->email=$request->input('emailid');
        $pass1=$request->input('password');
        
        $users->mob_no=$request->input('mobile');
        $users->gender=$request->input('gender');
        $users->comp_name=$request->input('cname');
        $users->note=$request->input('note');
       
        
       // $users->created_by=auth()->user()->id;
       // $users->created_date=$curr_date;
       // $users->c_ip=$ip;
        
        $users->save();
        
        return redirect('/admingo')->with('success','User Updated Successfully..!');   

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
