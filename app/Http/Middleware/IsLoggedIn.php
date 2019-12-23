<?php

namespace App\Http\Middleware;

use Closure;

class IsLoggedIn
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
        if(!$request->session()->has('userid')){ // if userid is not set in session
            return redirect()->to('/')->with('msg', 'You Have to Login for requesting for blood');

        }
        return $next($request);
    }
}
