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

                <form method="POST" action="{{ route('password.update') }}" style="margin-top:30px">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="col-12 text-center">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-12">
                            <label for="email" class=" col-form-label ">{{ __('E-Mail ') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group  col-md-12">
                            <label for="password" class=" col-form-label ">{{ __('Mật khẩu') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                        <label for="password-confirm" class=" col-form-label ">{{ __('Xác nhận mật khẩu') }}</label>
                        <input id="password-confirm" type="password" class="form-control"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>
                    </div>
                   
                    <div class="form-group text-center row m-t-10">
                        <div class="col-4">
                            <button class="btn btn-click btn-block waves-effect waves-light" type="submit">
                                {{ __('Gửi') }}
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
@endsection