<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminMiddlware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
          if(Auth::User()->vai_tro== '1'){
            return $next($request);
          }else 
          if(Auth::User()->vai_tro== '2'){
            return $next($request);
          }else
          if(Auth::User()->vai_tro== '3'){
            return $next($request);
          }
        }else{
            return redirect()->route('login')->with([
                'message'=>"Bạn phải đăng nhập vào !!"
            ]);
        }
        
    }
}