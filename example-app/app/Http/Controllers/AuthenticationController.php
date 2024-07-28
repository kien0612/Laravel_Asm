<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
      $remember = $req->has('remember');
      if(Auth::attempt($dataUserLogin,$remember)){
        if(Auth::user()->vai_tro=='1'){
            return redirect()->route('admin.admin');
        }else  if(Auth::user()->vai_tro=='2'){
         echo"helo";
      }else{
          return redirect()->route('/')->with([
            'message'=>'thanh công ' 
         ]);;
        }

      }else{
        return redirect()->back()->with([
           'message'=>'Email hoặc Mật khẩu không đúng vui lòng nhập lại !!' 
        ]);
      }
    }
    public function logout(){
      Auth::logout();
        return redirect()->route('login')->with([
          'message'=>'Đăng xuất thành công !!' 
       ]);
      
      }

    public function postdanhky(Request $req){
      $check = User::where('email',$req ->email)->exists();
      if($check){
        return redirect()->back()->with(
        [
          'message'=>'Tài khoản đã tồn tại !!' 
        ]
        );
        
      }else{
        $data=[ 
          'name' => $req ->name,
          'email' => $req ->email,
          'password' =>Hash::make($req ->password)
        ];
        $newUser= User::create($data);
        return redirect()->route('login')->with([
          'message'=>'Đăng ký thàng công vui lòng đăng nhập vào !!' 
       ]);
      }
    }  
}