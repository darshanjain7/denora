<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use   App\User;
use DB;

use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Hash;

class OtherController extends Controller
{
     public function updatepassword(Request $request,$id)
    {
         
         $user=User::find($id);

         $this->validate($request,[
                'password'=>'required|confirmed',
                
            ]);

        $pass1=$request->input('password');
        $hashedPassword = Hash::make($pass1);
        $user->password=$hashedPassword;

        $user->save();	
        
        return redirect('/admingo')->with('success','Password Reset Successfully..!');  


   

         
       
    }
}
