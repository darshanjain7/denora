<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use DB;
 
 
use Session;

use Illuminate\Support\Facades\Validator;

 use App\Rules\Captcha;
 
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("welcomepage.contact");
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
        'upload' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'g-recaptcha-response' => 'required',
       
    ]);

  date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
    
 
    if ($validator->fails()) {
        return redirect('/contact')
                    ->withErrors($validator)
                    ->withInput();
    }
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
      
      if($request->hasFile('upload'))
        {
            
         $fileNamewithext1=$request->file('upload')->getClientOriginalName();
         $fileNamewithext = preg_replace('/\s+/', '_', $fileNamewithext1);
                $fileName=pathinfo($fileNamewithext,PATHINFO_FILENAME);
                  $fileetx=$request->file('upload')->getClientOriginalExtension();
                    $fileNameToUpload = "denora_feedback_image_".time();
                     $fileNameToUpload .= ".png";
                 // $fileNameToUpload=$fileName .'.'. time(). '.' . $fileetx;
    
                $path=$request->file('upload')->storeAs('public/documents/upload',$fileNameToUpload);
                
           
          $data= array('name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'sitename' => $request->sitename,
        'partslno' => $request->partslno,
        'mobile' => $request->mobile,
        'upload' => $request->upload,
        'msg' => $request->msg,
        'fileNameToUpload' => $fileNameToUpload
        );
   
     
  
       
        Mail::send('welcomepage.thankyou', $data, function ($message) use($request)
        {
            $message->from('noreply.gaschlorination@denora.com','Gas Chlorination');
    	  //  $message->to('darshanjain.arokia.com');
		     $message->to('csteam.dnwt.uk@denora.com');
		    $message->subject("Conatct Form");
		  // $message->attach('/'.$fileNameToUpload);
       
		});
		   $values = array('name' => $request->input('name'),'email' => $request->input('email'),'mobile' => $request->input('mobile'),'subject' => $request->input('subject'),'site_name' => $request->input('sitename'),'part_no' => $request->input('partslno'),'note' => $request->input('msg'),'created_date' => $curr_date,'created_ip' => $ip,'doc_upload' => $fileNameToUpload);
DB::table('tbl_customer_contactus')->insert($values);

		?> <head>
         <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"/> <link href="https://cdn.jsdelivr.net/sweetalert2/6.4.3/sweetalert2.min.css" rel="stylesheet"/> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> <script src="https://cdn.jsdelivr.net/sweetalert2/latest/sweetalert2.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    </head>
    <body>
       <?php   echo '<script>
    setTimeout(function() {
        swal({
            title: "Your Email is submitted!",
            text: "We will be contact you shortly",
            type: "success"
        }, function() {
            window.location = "/";
        });
    }, 1000);
</script>';   ?>
       
    </body><?php 
		//Session::flash('success','Your Email was Sent..!');
	//	return redirect('/');
	  
          
        }
        else
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
              //$message->to('darshanjain.arokia.com');
		    $message->to('csteam.dnwt.uk@denora.com');
		    $message->subject("Conatct Form");
		  // $message->attach('/'.$fileNameToUpload);
       
		});
			 
		?> <head>
         <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"/> <link href="https://cdn.jsdelivr.net/sweetalert2/6.4.3/sweetalert2.min.css" rel="stylesheet"/> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> <script src="https://cdn.jsdelivr.net/sweetalert2/latest/sweetalert2.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    </head>
    <body>
       <?php   echo '<script>
    setTimeout(function() {
        swal({
            title: "Your Email is submitted!",
            text: "We will be contact you shortly",
            type: "success"
        }, function() {
            window.location = "/";
        });
    }, 1000);
</script>';   ?>
       
    </body><?php 
	
	 
    }
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
