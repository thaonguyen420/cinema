@extends('front_end.index')
@section('content')
<div class="container section negative-margin contact">
    <div class="row">
        <div class="col-sm-12">
            <h2>Send a message</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            @if( ! session()->has('message'))

            <form action="{{ route('contacts.store') }}" method="POST">
                <div class="form-group">
                    <label for="name">Họ và tên</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    <div>{{ $errors->first('name') }}</div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                    <div>{{ $errors->first('email') }}</div>
                </div>

                <div class="form-group">
                    <label for="message">Lời nhắn</label>
                    <textarea name="message" id="message" cols="30" rows="10"
                        class="form-control">{{ old('message') }}</textarea>
                    <div>{{ $errors->first('message') }}</div>
                </div>

                @csrf

                <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
            @endif
        </div>

        <div class="col-sm-5 col-sm-push-1">
            <div class="icon-row">
                <div class="col">
                    <span class="circle">
                        <i class="material-icons">place</i>
                    </span>
                </div>
                <div class="col">
                    <h4 class="no-underline">Địa chỉ</h4>
                    <p>342 Sloane St, London, W1D 3NE</p>
                </div>
            </div>
            <div class="icon-row">
                <div class="col">
                    <span class="circle">
                        <i class="material-icons">email</i>
                    </span>
                  
                </div>
                <div class="col">
                    <h4 class="no-underline">Email</h4>
                    <p>Thessiscinima001@gmail.com</p>
                </div>
            </div>
            <div class="icon-row">
                <div class="col">
                    <span class="circle">
                        <i class="material-icons">phone in talk</i>
                    </span>
                </div>
                <div class="col">
                    <h4 class="no-underline">Điện thoại</h4>
                    <p>+44 0330 123 4567</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection