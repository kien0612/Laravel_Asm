<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthenticationController extends Controller
{
    public function login()
    {
        return view('nguoidung.login');
    }
    
    public function postlogin(Request $req)
    {
      $dataUserLogin=[
        'email'=> $req->email,
        'password'=> $req->password,
      ];
      if(Auth::attempt($dataUserLogin)){
        if(Auth::User()->vai_tro=='1'){
            return view('admin.index');
        }else if(Auth::User()->vai_tro== '2'){
            echo "nhan vien";
        }else{
            return view('nguoidung.index');
        }

      }else{
        return redirect()->back()->with([
           'message'=>'Eamil khong dung vui long dang nhap laij' 
        ]);
      }
    }
}