@extends('layouts.app')

@section('content')
<div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">
        <div class="account-bg">
            <div class="card-box mb-0">
                <div class="text-center m-t-20" style="position: relative;width:100%">
                    <a href="index.html" class="logo" >
                        <img src="images/logo.png" alt="" class="img-logo" style="width:100px;height:auto">
                    </a>
                </div>
                <div class="m-t-10 p-20">
                    <div class="row">
                        <div class="col-12 text-center">
                        </div>
                    </div>
                    <form method="POST" action="{{ route('register') }}" style="margin-top:30px">
                    @csrf
                        <div class="form-group row">
                            <div class="col-12">
                                <input name="name" id="name" class="form-control" type="text" placeholder="Họ và tên"value="{{ old('name') }}" >
                                @error('name')
                                    <span class="red">{{ $message }} </span>    
                                @enderror
                            </div>
                          
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <input name="email" type="email" class=" @error('email') is-invalid @enderror form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{ old('email') }}" >
                                @error('email')
                                <span class="red">{{ $message }}  </span>                              
                                @enderror       
                            </div>
                                         
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <input name="password" type="password" class="form-control" name="pass" placeholder="Mật khẩu " >
                                @error('password')
                                  <span class="red"> {{ $message }}</span>
                                @enderror
                            </div> 
                           
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Xác nhận mật khẩu">
                                @error('password_confirmationd')
                                    <span class="red" >
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>                   
                        </div>
                          
                       
                        <!-- <div class="form-group row"> -->
                            <div class="box-calendar" style="position: relative;">
                                <i class="icon-calendar fal fa-calendar-week"></i>
                                <input name="born" type="text" id="datepicker"  class="form-control" placeholder="Ngày sinh" >
                                @error('born')
                                    <span class="red">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        <!-- </div> -->
                        <div class="form-group text-center row m-t-10">
                            <div class="col-12">
                                <button class="btn btn-click btn-block waves-effect waves-light" type="submit">
                                {{ __('Đăng ký') }}
                              </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end card-box-->
        
    </div>
    <!-- end wrapper page -->
@endsection
