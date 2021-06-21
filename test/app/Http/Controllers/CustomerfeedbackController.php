<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use DB;

use Session;

use Jenssegers\Agent\Agent;

 use App\Rules\Captcha;

use Illuminate\Support\Facades\Validator;

class CustomerfeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function index()
    {
       
        return view("welcomepage.customer-feedback");
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
              // return "231321";
  
        $data= array('rating' => $request->rating2,
        'like' => $request->like,
        'msg' => $request->msg,
          
         );
           $validator = Validator::make($request->all(), [
        'like' => 'required',
         'g-recaptcha-response' => 'required',
         
       
    ]);
      if ($validator->fails()) {
              
               return view('welcomepage.customer-feedback')->withErrors($validator);
        }
         date_default_timezone_set('Asia/Kolkata'); 
        $curr_date=date("Y-m-d H:i:s");
        $ip=$_SERVER['REMOTE_ADDR'];
 
         $agent = new Agent();

         $browser1 = $agent->browser();
         $version = $agent->version($browser1);
         
        
 
         $platform = $agent->platform();
        // $platformversion = $agent->version($platform);
 
        $browser=$browser1 . ' - ' . $version . ' - ' .$platform ;
 
        $values = array('rating' => $request->input('rating2'),'recomand' => $request->input('like'),'message' => $request->input('msg'),'created_date' => $curr_date,'created_ip' => $ip,'system_details' => $browser);
        DB::table('tbl_customer_feedback')->insert($values);

        Mail::send('welcomepage.thankyou1', $data, function ($message) use ($data)
        {
            $message->from("feedback@denora.com");
		    $message->to('darshanjain.arokia@gmail.com');
		    $message->subject("Customer Feedback");
       
		});
		?> 
    <head>
         <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"/> <link href="https://cdn.jsdelivr.net/sweetalert2/6.4.3/sweetalert2.min.css" rel="stylesheet"/> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> <script src="https://cdn.jsdelivr.net/sweetalert2/latest/sweetalert2.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    </head>
    <body>
       <?php echo '<script>
    setTimeout(function() {
        swal({
            title: "Thanks for your valuable feedback!",
            text: "",
            type: "success"
        }, function() {
            window.location = "/";
        });
    }, 1000);
</script>'; ?>
       
    </body>
 <?php 
		//Session::flash('success','Your Feedback is Submitted..!');
	//	return redirect('/');
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
