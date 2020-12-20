@extends('front_end.index')
@section("content")
<div class="container " style="padding-top: 75px;">
    <div class="col-md-12 ">
        <h4 class="box_header" style="margin-bottom:34px">Kết quả tìm kiếm cho '{{$search}}' </h4>
        <div class="col-50 text-center">
            <form action="{{URL::to('/search')}}" method="get">
                <div class="search " style="width: 100%;position: relative;">
                    <input class="search-txt" type="search" name="search" placeholder="Nhập tìm kiếm"
                        style="width: 100%;background: #2f3640;padding-left:10px">
                    <a href="{{URL::to('/search')}}" class="page-search">
                        <svg class="svg-inline--fa fa-search fa-w-16 icon-search" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                            </path>
                        </svg><!-- <i class="fas icon-search fa-search"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container " style="padding-bottom: 75px;">
    @foreach($post as $search)
    <div class="row movie-tabs" style="margin-top:50px">
                            <div class="col-md-2 col-sm-3">
                                <a href="{{URL::to('phims/'.$search->movieId)}}">
                                    <img src="{{$search->row}}" alt="Movie title">
                                </a>
                            </div>
                            <div class="col-md-10 col-sm-9">
                                <span class="title">{{$search->name}}</span>

                                <p style="margin-top:20px">{{$search->content}}</p>
                                <p><a href="{{URL::to('phims/'.$search->movieId)}}" class="arrow-button">Đọc thêm</a></p>

                            </div>
                        </div>
    @endforeach
</div>
@endsection