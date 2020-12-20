@extends('front_end.index')
@section('content')

<div class="container section negative-margin contact">
    <div class="row">
        <div class="row">
            <div class="col-sm-12">
                <h2>Send a message</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <form method="post" action="/gui">
                    @csrf
                    <div class="form-groups" >
                        <label>Họ và tên *</label>
                        <input value="{{old('name')}}" type="text" name="name" />
                    </div>
                    @error('name')
                          <span class="red"> {{ $message }} </span>
                     @enderror
                    <div class="form-groups">
                        <label>Email *</label>
                        <input value="{{old('email')}}" type="email" name="email" />
                       
                    </div>
                    @error('email')
                         <span class="red"> {{ $message }} </span>
                     @enderror
                    <div class="form-groups">
                        <label>Lời phản hồi *</label>
                        <textarea  value="{{old('content')}}" rows="5" name="content"></textarea>
                      
                    </div>
                    @error('content')
                         <span class="red"> {{ $message }} </span>
                    @enderror
                    <div class="form-group right-align">
                        <input type="submit" name="send" class="btn" value="Gửi" style="background-color: #ec7532;border-color:#ec7532;border-radius:0px"/>
                    </div>
                </form>
            </div>
            <div class="col-sm-5 col-sm-push-1">
                <div class="icon-row">
                    <div class="col">
                        <span class="circle">
                            <i class="material-icons">place</i>
                        </span>
                    </div>
                    <div class="col">
                        <h4 class="no-underline">Trụ sở</h4>
                        <p>342 FPLOY Cinema, Quang Trung </p>
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
                        <p><a href="https://www.klevermedia.co.uk/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="b5dcdbd3daf5d8dac3dcd0c6c1d4c79bd6da9bc0de">Thesis@gmail.com</a></p>
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
                        <p>0369789457</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection