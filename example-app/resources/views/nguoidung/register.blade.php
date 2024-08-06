@extends('nguoidung.layout')
@section('content')
<br>
<section class="page_single">
    <div class="special-style col-md-offset-0 pull-right">
        <div class="bg-image" style="background-image:url('assets/img/backgrounds/bg3.jpg');"></div>
    </div>
    <div class="container">
        <div class="row padTB100">
            <div class="clear"></div>
            <!--//==Login Section Start==//-->
            <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2 col-sm-offset-2 col-xs-offset-0">
                <div class="centered-title">
                    <h2>Đăng ký<span class="heading-border"></span></h2>
                    <div class="clear"></div>
                    <em>Chán không muốn nói !!</em>
                </div>
                <!--//==Form Start==//-->
                @if (session('message'))
                   <p class="text-bg-danger">{{session('message')}}</p>
                   @endif
                <form action="{{route('postdanhky')}}" method="post" class="login-form">
                    @csrf
                    <p class="form-row pd-right">
                        <label for="username">Nhập name <span class="required">*</span></label>
                        <input type="text" name="name" id="username" class="form-controller"  placeholder="Nhập name vào !" value="{{old('name')}}" >
                    </p>
                    @error('name')
                    <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                    <p class="form-row pd-right">
                        <label for="username">Nhập Email <span class="required">*</span></label>
                        <input type="email" name="email" id="username" class="form-controller"  placeholder="Nhập email vào !"  value="{{old('email')}}">
                    </p>
                    @error('email')
                    <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                    <p class="form-row pd-left">
                        <label for="password">Passwords <span class="required">*</span></label>
                        <input type="text" name="password" id="password" class="form-controller"  placeholder="Nhập mật Khẩu vào" value="{{old('password')}}">
                    </p>
                    @error('password')
                    <div class="alert alert-danger"> {{$message}} </div>
                    @enderror
                  
                    <p class="form-row">
                        <button  class="theme-button col-md-12 marB20">Đăng ký</button>
                                           
                    </p>
                    <p class="lost_password">
                        <a href="#">Quyên mật khẩu ??</a>------<a href="{{ route('login') }}">Đăng Nhập</a>
                    </p>  
                </form>
                <!--//==Form End==//-->
            </div>
            <!--//==Login Section End==//-->
        </div>
    </div>
</section>
@endsection