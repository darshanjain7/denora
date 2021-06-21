<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use Session;

use DB;

use Auth;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Password;

class apienrollmentcontroller extends Controller
{
       public function enrollment(Request $request)
     {
          
          date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
    
     $data= array('enroll_name' => $request->enroll_name,
        'enroll_email_id' => $request->enroll_email_id,
        'enroll_password' => $request->enroll_password,
        'enroll_contact_no' => $request->enroll_contact_no,
        'enroll_address' => $request->enroll_address,
        'enroll_occupation' => $request->enroll_occupation,
        'enroll_company_name' => $request->enroll_company_name,
        'enroll_experience_level' => $request->enroll_experience_level,
         'pass_hint' => $request->enroll_password
        );
        $password = $request->enroll_password; // password is form field
$hashed = Hash::make($password);
       
         $values = array('pass_hint' => $request->input('pass_hint'),'name' => $request->input('enroll_name'),'email' => $request->input('enroll_email_id'),'password' => $hashed, 'mob_no' => $request->input('enroll_contact_no'), 'enroll_address' => $request->input('enroll_address'), 'enroll_occupation' => $request->input('enroll_occupation'),  'enroll_company_name' => $request->input('enroll_company_name'),'enroll_experience_level' => $request->input('enroll_experience_level'),  'enroll_created_date' => $curr_date,'enroll_ip' => $ip);
        DB::table('users')->insert($values);

 
		  $response = array('Response' => true);
        // return should be in success or failer
		return json_encode($response);
     }
     
       public function enrollmentuserlogin(Request $request)
     {
      
        
         $userdata = array(
                 'email' => $request->email,
                 'password' => $request->password
         
    );
    
      if (Auth::attempt($userdata)) {
          $email = Auth::user()->email;
         // return $email123;
              $data = DB::select("SELECT id FROM `users` WHERE `email`='$email'");
              $roles = DB::table('users')->where('email',$email)->pluck('id');
              $data1 = array('Response' => true,'id' => $roles);
//  return $data1;
  	return json_encode($data1);
 

    } else {        

      $response = array('Response' => false);
       	return json_encode($response);

    }
     }
    public function enrollmentuserdashboard($id)
     {
        $data = DB::select("SELECT * FROM `users` where id=$id and user_status=1"); 
            return $data;
              $response = array('Response' => true);
       	return json_encode($response);
    }
        public function enrollmentuserpopup1(Request $request)
     {
            $data= array('equipementname' => $request->equipementname,
         'devlverytime' => $request->devlverytime,
         'equipmentqty' => $request->equipmentqty,
         'deliveryloc' => $request->deliveryloc,
         'userid' => $request->userid
         );
         $by = $request->userid;
         
          date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
          $values = array('equipementname' => $request->input('equipementname'),'devlverytime' => $request->input('devlverytime'),'equipmentqty' => $request->input('equipmentqty'),'deliveryloc' => $request->input('deliveryloc'),'created_date' => $curr_date,'created_by' => $by,'created_ip' => $ip);
        DB::table('tbl_enquirt_ios')->insert($values);

 
		 $response = array('Response' => true);
       	return json_encode($response);
    }
     public function enrollmentuseremailverification(Request $request)
     {
         $email=$request->email;
        //$data = DB::select("SELECT * FROM `users` WHERE `email`='$email'")->count();
        $count2 = \DB::table('users')->where('email', '=', $email)->count();
            if($count2>0)
           {
              $response = array('Response' => true);
       	    return json_encode($response);
            }
            else
            {
                 $response = array('Response' => false);
       	        return json_encode($response);
            }
     } 
 
  public function enrollmentuserpasschange(Request $request)
     {
             $old_pass=$request->old_pass;
          $new_pass=$request->new_pass;
           $conf_new_pass=$request->conf_new_pass;
            $userid=$request->userid;
            $hashed = Hash::make($new_pass);
            
        $data = DB::update("UPDATE `users` SET  `password`='$hashed' WHERE `id`='$userid'");
           if($data>0)
           {
              $response = array('Response' => true);
       	    return json_encode($response);
            }
            else
            {
                 $response = array('Response' => false);
       	    return json_encode($response);
            }
     }   
public function enrollmentuserforgotpass(Request $request)
    {
        
          $email=$request->email;
        //  return $email;
            // $count2 = DB::select("SELECT pass_hint FROM `users` WHERE  `email`='$email'");
                $data1 = DB::table('users')->where('email',$email)->pluck('pass_hint'); 
                  $data= array('password' => $data1);
                  
        Mail::send('welcomepage.emailsent', $data, function ($message) use ($data)
        {
            $message->from("feedback@denora.com");
		    $message->to('darshanjain.arokia@gmail.com');
		  //  $message->to($data111);
		    $message->subject("Forgot Password");
       
		});
	 $response = array('Response' => true);
       	    return json_encode($response);
    }
        
   
    public function enrollmentuserchangepass(Request $request)
    {
 $input = $request->all();
    // $userid = Auth::guard('api')->user()->id;
   $userid=1;
    $rules = array(
        'old_password' => 'required',
        'new_password' => 'required|min:6',
        'confirm_password' => 'required|same:new_password',
    );
    $validator = Validator::make($input, $rules);
    if ($validator->fails()) {
        $arr = array("status" => 400, "message" => $validator->errors()->first(), "data" => array());
    } else {
        try {
            if ((Hash::check(request('old_password'), Auth::user()->password)) == false) {
                $arr = array("status" => 400, "message" => "Check your old password.", "data" => array());
            } else if ((Hash::check(request('new_password'), Auth::user()->password)) == true) {
                $arr = array("status" => 400, "message" => "Please enter a password which is not similar then current password.", "data" => array());
            } else {
                User::where('id', $userid)->update(['password' => Hash::make($input['new_password'])]);
                $arr = array("status" => 200, "message" => "Password updated successfully.", "data" => array());
            }
        } catch (\Exception $ex) {
            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            } else {
                $msg = $ex->getMessage();
            }
            $arr = array("status" => 400, "message" => $msg, "data" => array());
        }
    }
    return \Response::json($arr);
        
    }
}
