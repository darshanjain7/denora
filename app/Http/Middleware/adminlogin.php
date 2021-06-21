<?php

namespace App\Http\Middleware;
use DB;
use Auth;
use App\User;
use Closure;

class adminlogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user())
         {
             if(Auth::user()->user_role=="1")
            {
           
                
        //return  view('admin.index')->with('user',Auth::user());
                return redirect('/admingo');
 
            //return view('admin.index');
            }
            else if(Auth::user()->user_role=="2")
            {
                return redirect('/welcomepage');
            }
            else
            {
                return redirect('/login');
            }
         }
         else
         {
             return redirect('/login');
         }
       
        return $next($request);
    }
}
