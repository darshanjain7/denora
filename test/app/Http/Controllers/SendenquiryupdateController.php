<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use DB;

use Session;

use Jenssegers\Agent\Agent;

use Illuminate\Support\Facades\Validator;

class SendenquiryupdateController extends Controller
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
        
        $agent = new Agent();

        $browser1 = $agent->browser();
        $version = $agent->version($browser1);
        
       

        $platform = $agent->platform();
       // $platformversion = $agent->version($platform);

       $browser=$browser1 . ' - ' . $version . ' - ' .$platform ;
           $data= array('name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'sknumber' => $request->sknumber,
        'msg' => $request->msg,
        'sitename' => $request->sitename,
         'upload' => $request->upload,
        'mobile' => $request->mobile
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
        'sknumber' => $request->sknumber,
        'msg' => $request->msg,
        'sitename' => $request->sitename,
         'upload' => $request->upload,
        'mobile' => $request->mobile,
        'fileNameToUpload' => $fileNameToUpload
        );
       $sknum= $data['sknumber'];
          
         if ($validator->fails()) {
              
               return view('welcomepage.sendenqiery')->with('id',$sknum)->withErrors($validator);
        }
    
       
          Mail::send('welcomepage.thankyousknumber', $data, function ($message) use($request)
        {
            $message->from('noreply.gaschlorination@denora.com','Gas Chlorination');
		    $message->to('darshanjain.arokia@gmail.com');
		    $message->subject("Enquiry Form");
		  // $message->attach('/'.$fileNameToUpload);
       
		});
		   
        $values = array('name' => $request->input('name'),'email' => $request->input('email'),'mobile' => $request->input('mobile'),'subject' => $request->input('subject'),'site_name' => $request->input('sitename'),'sk_number' => $sknum,'note' => $request->input('msg'),'created_date' => $curr_date,'created_ip' => $ip,'system_details' => $browser,'doc_upload' => $fileNameToUpload);
DB::table('tbl_customer_sk_number_request')->insert($values);
		?> <head>
         <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"/> <link href="https://cdn.jsdelivr.net/sweetalert2/6.4.3/sweetalert2.min.css" rel="stylesheet"/> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> <script src="https://cdn.jsdelivr.net/sweetalert2/latest/sweetalert2.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    </head>
    <body>
       <?php echo '<script>
    setTimeout(function() {
        swal({
            title: "Your Email is submitted!",
            text: "We will be contact you shortly",
            type: "success"
        }, function() {
            window.location = "/";
        });
    }, 1000);
</script>'; ?>
       
    </body><?php 
        }
        else
        {
             $data= array('name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'sknumber' => $request->sknumber,
        'msg' => $request->msg,
        'sitename' => $request->sitename,
         'upload' => $request->upload,
        'mobile' => $request->mobile,
        'fileNameToUpload' => $no_image_name_db
        );
       $sknum= $data['sknumber'];
          
         if ($validator->fails()) {
              
               return view('welcomepage.sendenqiery')->with('id',$sknum)->withErrors($validator);
        }
    
       
          Mail::send('welcomepage.thankyousknumber', $data, function ($message) use($request)
        {
            $message->from('noreply.gaschlorination@denora.com','Gas Chlorination');
		    $message->to('darshanjain.arokia@gmail.com');
		    $message->subject("Enquiry Form");
		  // $message->attach('/'.$fileNameToUpload);
       
		});
		   
        $values = array('name' => $request->input('name'),'email' => $request->input('email'),'mobile' => $request->input('mobile'),'subject' => $request->input('subject'),'site_name' => $request->input('sitename'),'sk_number' => $sknum,'note' => $request->input('msg'),'created_date' => $curr_date,'created_ip' => $ip,'system_details' => $browser,'doc_upload' => $no_image_name_db);
DB::table('tbl_customer_sk_number_request')->insert($values);
		?> <head>
         <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"/> <link href="https://cdn.jsdelivr.net/sweetalert2/6.4.3/sweetalert2.min.css" rel="stylesheet"/> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> <script src="https://cdn.jsdelivr.net/sweetalert2/latest/sweetalert2.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    </head>
    <body>
       <?php echo '<script>
    setTimeout(function() {
        swal({
            title: "Your Email is submitted!",
            text: "We will be contact you shortly",
            type: "success"
        }, function() {
            window.location = "/";
        });
    }, 1000);
</script>'; ?>
       
    </body><?php 
        }
		//Session::flash('success','Your Email was Sent..!');
	//	return redirect('/');
	 
	 
	    date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
    
     

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
