<?php

namespace App\Http\Middleware;
use Auth;
use Session;
use Closure;

class student
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
        if(auth()->user()->type == 12){
            return $next($request);
        }
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
