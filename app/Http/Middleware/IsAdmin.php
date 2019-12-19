<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
         if($request->session()->get('userrole')=='Requestor'){ // if userid is not set in session
            return redirect()->to('Requestor/home');
           
        }
        else if($request->session()->get('userrole')=='Donor'){ // if userid is not set in session
            return redirect()->to('Donor/home');
           
        }
         else if($request->session()->get('userrole')!='Admin'){ // if userid is not set in session
            return redirect()->to('/');
           
        }
        
        return $next($request);
    }
}
