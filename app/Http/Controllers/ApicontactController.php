<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use Session;

use DB;

class ApicontactController extends Controller
{
     public function list(Request $request)
     {
            $data= array('name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'msg' => $request->message,
        'sitename' => $request->sitename,
        'partslno' => $request->partslno,
        'mobile' => $request->mobile
        );
 
   
 //echo file_put_contents("public/documents/upload/test.txt","Hello World. Testing!");
 
        Mail::send('welcomepage.thankyou', $data, function ($message) use ($data)
        {
             $message->from("feedback@denora.com");
		   // $message->to('csteam.dnwt.uk@denora.com');
		     $message->to('darshanjain.arokia@gmail.com');
		    $message->subject("Contact Us");
       

		});
		return $data;
}
    public function list1(Request $request)
     {
    $data= array('rating' => $request->rating2,
        'like' => $request->like,
        'msg' => $request->msg
         );
       
       
        Mail::send('welcomepage.thankyou1', $data, function ($message) use ($data)
        {
            $message->from("feedback@denora.com");
		  //  $message->to('csteam.dnwt.uk@denora.com');
		   $message->to('darshanjain.arokia@gmail.com');
		    $message->subject("Customer Feedback");
       
		});
		return $data;
}
    public function list2(Request $request)
     {
 $data= array('name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'sknumber' => $request->sknumber,
        'msg' => $request->message,
        'sitename' => $request->sitename,
        'partslno' => $request->partslno,
        'mobile' => $request->mobile
        );
       
        Mail::send('welcomepage.thankyousknumber', $data, function ($message) use ($data)
        {
            $message->from("feedback@denora.com");
		    // $message->to('csteam.dnwt.uk@denora.com');
		     $message->to('darshanjain.arokia@gmail.com');
		    $message->subject("Customer Enquiry");
       
		});
		return $data;
}

    public function listdb(Request $request)
     {

          date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
    
     $data= array('name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'sitename' => $request->sitename,
        'partslno' => $request->partslno,
        'mobile' => $request->mobile,
        'upload' => $request->upload,
        'msg' => $request->msg
        );
                 
         $no_image_name_db="no_image.jpg";
        
        $image_is= $request->upload;
        if($image_is==NULL)
        {

       
     
         $values = array('name' => $request->input('name'),'email' => $request->input('email'),'mobile' => $request->input('mobile'),'subject' => $request->input('subject'),'site_name' => $request->input('sitename'),'part_no' => $request->input('partslno'),'note' => $request->input('msg'),'created_date' => $curr_date,'created_ip' => $ip,'doc_upload' => $no_image_name_db);
        DB::table('tbl_customer_contactus')->insert($values);
               
                $data_mail= array('name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'sitename' => $request->sitename,
        'partslno' => $request->partslno,
        'mobile' => $request->mobile,
        'upload' => $request->upload,
        'msg' => $request->msg,
         'fileNameToUpload' => $no_image_name_db
        );
     
       
        Mail::send('welcomepage.thankyou', $data_mail, function ($message) use($request)
        {
            $message->from('noreply.gaschlorination@denora.com','Gas Chlorination');
		   // $message->to('csteam.dnwt.uk@denora.com');
		     $message->to('darshanjain.arokia@gmail.com');
		    $message->subject("Conatct Form");
		  // $message->attach('/'.$fileNameToUpload);
       
		});
      
        $response = array('Response' => true);
        // return should be in success or failer
		return json_encode($response);
        }
        else
        {
        // image path can be changed
        $image_name = "denora_feedback_image_".time();
        $extension = ".png";
        // for db storing purpose
        $image_name_db = "denora_feedback_image_".time();
        $image_name_db .= ".png";
        
        $image_path = "/home/gaschlorinationd/public_html/storage/app/public/documents/upload/".$image_name.$extension;
        // file save method
        $file = fopen($image_path, "wb");
        $searchForValue = ',';
 
        if( strpos($image_is, $searchForValue) !== false ) 
        {
             // to remove the base64/extension removing before write
             $data_image = explode(',', $request->upload);
             fwrite($file, base64_decode($data_image[1]));
        }   
        else
        {
             fwrite($file, base64_decode($image_is));
        }
        fclose($file);
        
        
 

        
        date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
    
      
        $values = array('name' => $request->input('name'),'email' => $request->input('email'),'mobile' => $request->input('mobile'),'subject' => $request->input('subject'),'site_name' => $request->input('sitename'),'part_no' => $request->input('partslno'),'note' => $request->input('msg'),'created_date' => $curr_date,'created_ip' => $ip,'doc_upload' => $image_name_db);
        DB::table('tbl_customer_contactus')->insert($values);
               
                $data_mail= array('name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'sitename' => $request->sitename,
        'partslno' => $request->partslno,
        'mobile' => $request->mobile,
        'upload' => $request->upload,
        'msg' => $request->msg,
         'fileNameToUpload' => $image_name_db
        );
     
       
        Mail::send('welcomepage.thankyou', $data_mail, function ($message) use($request)
        {
            $message->from('noreply.gaschlorination@denora.com','Gas Chlorination');
		   // $message->to('csteam.dnwt.uk@denora.com');
		     $message->to('darshanjain.arokia@gmail.com');
		    $message->subject("Conatct Form");
		  // $message->attach('/'.$fileNameToUpload);
       
		});
      
        $response = array('Response' => true);
        // return should be in success or failer
		return json_encode($response);
        }
       
    }
    
    
    
    public function sknumber(Request $request)
     {
          
        date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
    


              $data= array('name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'sknumber' => $request->sknumber,
        'msg' => $request->msg,
        'sitename' => $request->sitename,
         'upload' => $request->upload,
        'mobile' => $request->mobile
        );
             
         $sknum= $data['sknumber'];  
         
         $no_image_name_db="no_image.jpg";
        
        $image_is= $request->upload;
        if($image_is==NULL)
        {
            
              $values = array('name' => $request->input('name'),'email' => $request->input('email'),'mobile' => $request->input('mobile'),'subject' => $request->input('subject'),'site_name' => $request->input('sitename'),'sk_number' => $sknum,'note' => $request->input('msg'),'created_date' => $curr_date,'created_ip' => $ip,'doc_upload' => $no_image_name_db);
              DB::table('tbl_customer_sk_number_request')->insert($values);
         $data_mail= array('name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'sknumber' => $request->sknumber,
        'msg' => $request->msg,
        'sitename' => $request->sitename,
         'upload' => $request->upload,
        'mobile' => $request->mobile,
        'fileNameToUpload' => $no_image_name_db
        );
        
               
       
        Mail::send('welcomepage.thankyousknumber', $data_mail, function ($message) use($request)
        {
            $message->from('noreply.gaschlorination@denora.com','Gas Chlorination');
		//    $message->to('csteam.dnwt.uk@denora.com');
		     $message->to('darshanjain.arokia@gmail.com');
		    $message->subject("Enquiry Form");
		  // $message->attach('/'.$fileNameToUpload);
       
		});
      
        $response = array('Response' => true);
        // return should be in success or failer
		return json_encode($response);
       
       
        }
        else
        {
        // image path can be changed
        $image_name = "denora_feedback_image_".time();
        $extension = ".png";
        // for db storing purpose
        $image_name_db = "denora_feedback_image_".time();
        $image_name_db .= ".png";
         $searchForValue = ',';
        
        $image_path = "/home/gaschlorinationd/public_html/storage/app/public/documents/upload/".$image_name.$extension;
        // file save method
        $file = fopen($image_path, "wb");
         if( strpos($image_is, $searchForValue) !== false ) 
        {
             // to remove the base64/extension removing before write
             $data_image = explode(',', $request->upload);
             fwrite($file, base64_decode($data_image[1]));
        }   
        else
        {
             fwrite($file, base64_decode($image_is));
        }
        fclose($file);
        
       $values = array('name' => $request->input('name'),'email' => $request->input('email'),'mobile' => $request->input('mobile'),'subject' => $request->input('subject'),'site_name' => $request->input('sitename'),'sk_number' => $sknum,'note' => $request->input('msg'),'created_date' => $curr_date,'created_ip' => $ip,'doc_upload' => $image_name_db);
              DB::table('tbl_customer_sk_number_request')->insert($values);
         $data_mail= array('name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'sknumber' => $request->sknumber,
        'msg' => $request->msg,
        'sitename' => $request->sitename,
         'upload' => $request->upload,
        'mobile' => $request->mobile,
        'fileNameToUpload' => $image_name_db
        );
        
               
       
        Mail::send('welcomepage.thankyousknumber', $data_mail, function ($message) use($request)
        {
            $message->from('noreply.gaschlorination@denora.com','Gas Chlorination');
	//	    $message->to('csteam.dnwt.uk@denora.com');
		     $message->to('darshanjain.arokia@gmail.com');
		    $message->subject("Enquiry Form");
		  // $message->attach('/'.$fileNameToUpload);
       
		});
      
        $response = array('Response' => true);
        // return should be in success or failer
		return json_encode($response);
        }
    }
}
   

