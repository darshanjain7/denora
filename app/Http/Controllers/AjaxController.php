<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use   App\tbl_content;

use   App\Users;

use App\user_contents;

use DB;

class AjaxController extends Controller
{
       function processajax()
    {
    	if($_POST['cid'])
    	{
    		$tbl_content=$_POST['cid'];
    		$tbl_content=tbl_content::find($tbl_content);
    		$tbl_content->status=1;
    		//$tbl_content->status_updated_by=auth()->user()->id;
    	    $tbl_content->save(); 
    	}
    	 
    }
    function processajaxunapprove()
    {
    		if($_POST['cid'])
    	{
    		$tbl_content=$_POST['cid'];
    		$tbl_content=tbl_content::find($tbl_content);
    		$tbl_content->status=0;
    		//$tbl_content->status_updated_by=auth()->user()->id;
    	    $tbl_content->save(); 
    	}
    }

     function processajax1()
    {
        if($_POST['cid'])
        {
            $users=$_POST['cid'];
            $users=Users::find($users);
            $users->user_status=1;
            //$tbl_content->status_updated_by=auth()->user()->id;
            $users->save(); 
        }
         
    }
    function processajaxunapprove1()
    {
            if($_POST['cid'])
        {
            $users=$_POST['cid'];
            $users=Users::find($users);
            $users->user_status=0;
            //$tbl_content->status_updated_by=auth()->user()->id;
            $users->save(); 
        }
    }
    function showcpfd()
    {
        if($_POST['cid'])
        {
           // echo "gfgfdgfdgfd";
            $users = DB::table('tbl_contents')->select('*')->where('content_type',2)->where('status',1)->get();


             $data = json_decode( json_encode($users), true );

             return response(['data'=> json_encode($data)]);


        }       
    }
    function processajaxinactiveassign()
    {  

         if($_POST['caid'])
        {
             $users=$_POST['caid'];
             $data = DB::select("UPDATE `user_contents` SET `content_status`=0 where `user_content_id`=".$users."");
        }
    }
      function processajaxactiveassign()
    {  

         if($_POST['caid'])
        {
             $users=$_POST['caid'];
             $data = DB::select("UPDATE `user_contents` SET `content_status`=1 where `user_content_id`=".$users."");
        }
    }


}
