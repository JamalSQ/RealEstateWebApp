<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class Brokerauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->has('BROKER_LOGIN') || $request->session()->has('CUSTOMER_LOGIN')){
           
        }else{
            $request->session()->flash('error','Access Denied');
            return redirect('/');
        }
        return $next($request);
    }
}
