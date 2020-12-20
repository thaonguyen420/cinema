
<div class="navbar" role="navigation">
    <div class="heading">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form action="{{URL::to('/search')}}" method="get" style="width:100%">

                    <div class="search search-box">
                            <input class="search-txt"  type="search" name="search" placeholder="Nhập tìm kiếm">
                            <a href="{{URL::to('/search')}}" class="search-btn">
                            <i class="fas icon-search fa-search"></i>
                        </a>
                    </div>
                    </form>

                    <div class="tel">
                    @guest
                        <a href="{{ route('login') }}" style="padding-right: 10px;" class="header-main__links-item">{{ __('Đăng Nhập') }}</a> & @if (Route::has('register'))
                        <a href="{{ route('register') }}"  style="padding-left: 10px;"  class="header-main__links-item">{{ __('Đăng Ký') }}</a> @endif @else
                        <a href="" class="header-main__links-item"> 
                        <ul class="menu-hide">
                            <li style="position:relative">
                                {{ Auth::user()->name }}
                                &
                                @if(auth()->user()->power == 'admin')
                                    <ul>
                                        <li>
                                        <a href="{{URL::to('/dashboard')}}" >
                                        Quản lí admin
                                        </a>
                                        </li>
                                    </ul>
                                @endif
                            </li>
                        </ul>
                       
                        </a>
                        <a href="{{ route('logout') }}" class="header-main__links-item">Đăng Xuất</a> 
                    @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="navbar-header">
            <a href="index-2.html" class="logo" title="Craft beer landing page">
                <img src="images/logo.png" alt="Craft Beer HTML Template" style="height: 60px;">
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul  class="nav navbar-nav">
                <li class="ku">
                    <a href="?">Trang chủ</a>
                </li>
                <li class="">
                    <a href="{{URL::to('/movie')}}">Phim</a>
                </li>
                <li>
                    <a href="{{URL::to('/tick-box')}}">Mua vé </a>
                </li>
                <li>
                    <a href="{{URL::to('/ticket-cinema')}}">Rạp/giá vé </a>
                </li>
                <li class="dropdown">
                    <a href="{{URL::to('/news')}}">Tin tức</a>
                    
                </li>
                <li>
                    <a href="{{URL::to('/contacts')}}">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php 
     $banner = DB::table('banner') ->select('banner_id','banner_name','banner_image','banner_desc')->get();
?>
<div id="hero" class="carousel slide carousel-fade" data-ride="carousel">
        <img src="images/scroll-arrow.svg" alt="Scroll down" class="scroll" />
        <div class="container">
            <ol class="carousel-indicators">
                <li data-target="#hero" data-slide-to="0" class="active"></li>
                <li data-target="#hero" data-slide-to="1"></li>
                <li data-target="#hero" data-slide-to="2"></li>
            </ol>
        </div>
       
    <div class="carousel-inner">
    @php
        $i = 0;
    @endphp
            @foreach($banner as $s)
            @php
                $i++;
            @endphp
            <div class="item {{$i==1 ? 'active' : ''}}" style="background-image: url({{asset('public/upload/banner/'.$s->banner_image)}})">
                <div class="container">
                    <div class="row blurb scrollme animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-translatey="100">
                        <div class="col-md-9">
                            <h1><?=$s->banner_name?></h1>
                            <p><?=$s->banner_desc?></p>
                            <div class="buttons">
                                <a href="https://youtu.be/RhFMIRuHAL4" data-vbtype="video" class="venobox btn btn-default">
                                    <i class="material-icons">play_arrow</i>
                                    <span> Trailer</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>


