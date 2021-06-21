<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use Session;

class SendenquiryController extends Controller
{
     public function index()
     {
         
     }
     public function form123($id)
    {
        return view('welcomepage.sendenqiery')->with('id',$id);
       
    }
      
}
