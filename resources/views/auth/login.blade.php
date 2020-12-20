@extends('layouts.app')

@section('content')
<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="account-bg">
        <div class="card-box mb-0">
            <div class="text-center m-t-20" style="position: relative;width:100%">
                <a href="index.html" class="logo">
                    <img src="images/logo.png" alt="" class="img-logo" style="width:100px;height:auto">
                </a>
            </div>
            <div class="m-t-10 p-20">
                <div class="row">
                    <div class="col-12 text-center">
                    </div>
                </div>
                <form method="POST" action="{{ route('login') }}" style="margin-top:30px">
                    @csrf
                    <div class="form-group row">
                        <div class="col-12">
                            <input value="{{ old('email') }}" class="@error('email') is-invalid @enderror form-control" name="email" type="text" placeholder="Email"
                                required autocomplete="email" >
                                
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <input class="form-control" type="password"  placeholder="Mật khẩu"
                               required name="password"  autocomplete="current-password">
                        </div>
                    </div>
                    <div class="form-group">
                                @error('email')
                                    <span class="red" >
                                        {{ $message }}
                                    </span>
                                @enderror
                    </div>
                  
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="checkbox checkbox-custom">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup">
                                    {{ __('Lưu mật khẩu') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-muted"><i
                                    class="fa fa-lock m-r-5"></i> {{ __('Bạn quên mật khẩu?') }}</a>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        
                        <div class="col-12">
                            <button class="btn btn-click btn-block waves-effect waves-light" type="submit">
                                {{ __('Đăng nhập') }}
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
</body>

@endsection