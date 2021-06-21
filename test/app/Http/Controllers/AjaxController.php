<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 
use DB;

class AjaxController extends Controller
{
     
    function productcatinactive()
    {
        if($_POST['pcatid'])
        {
            $pgrpid=$_POST['pcatid'];
            $data1 = DB::select("UPDATE `tbl_product_category` SET  status=0 WHERE `sk_category_id`=".$pgrpid."");
        }  
    }
    function productcatactive()
    {
       // if($_POST['pcatid'])
       // {
           $pcatid=$_POST['pcatid'];
            $data1 = DB::select("UPDATE `tbl_product_category` SET  status=1 WHERE `sk_category_id`=".$pcatid."");
       // }  
     
    }
    
    function productgrpactive()
    {
        if($_POST['pgrpid'])
        {
            $pgrpid=$_POST['pgrpid'];
            $data1 = DB::select("UPDATE `tbl_product_group` SET  status=0 WHERE `product_group_id`=".$pgrpid."");
                 
               
        }
         
    }
    function productgrpinactive()
    {
        if($_POST['pgrpid'])
        {
            $pgrpid=$_POST['pgrpid'];
            $data1 = DB::select("UPDATE `tbl_product_group` SET  status=1 WHERE `product_group_id`=".$pgrpid."");            
        }     
    }
    function producttypeinactive()
    {
        if($_POST['pgrpid'])
        {
            $pgrpid=$_POST['pgrpid'];
            $data1 = DB::select("UPDATE `tbl_product_type` SET  status=0 WHERE `product_type_id`=".$pgrpid."");
        }  
    }
    function producttypeactive()
    {
        if($_POST['pgrpid'])
        {
            $pgrpid=$_POST['pgrpid'];
            $data1 = DB::select("UPDATE `tbl_product_type` SET  status=1 WHERE `product_type_id`=".$pgrpid."");
        }  
    }
    function producthtmlinactive()
    {
        if($_POST['pgrpid'])
        {
            $pgrpid=$_POST['pgrpid'];
            $data1 = DB::select("UPDATE `tbl_product_master` SET  status=0 WHERE `product_master_id`=".$pgrpid."");
        }  
    }
    function producthtmlactive()
    {
        if($_POST['pgrpid'])
        {
            $pgrpid=$_POST['pgrpid'];
            $data1 = DB::select("UPDATE `tbl_product_master` SET  status=1 WHERE `product_master_id`=".$pgrpid."");
        }  
    }

    




    /*   function processajax()
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
    }*/


}
