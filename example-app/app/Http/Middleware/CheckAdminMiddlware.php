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
          if(Auth::user()->vai_tro== '1'){
           return $next($request);
          }else  if(Auth::user()->vai_tro== '2'){
            return $next($request);
            // return redirect()->route('nhanvien.nhanvien');.
            
           }else{
            // return $next($request);
            return  redirect()->route('login');
          }
        }else{
            return redirect()->route('404')->with([
                'message'=>"Bạn phải đăng nhập vào !!"
            ]);
        }
        
    }
}