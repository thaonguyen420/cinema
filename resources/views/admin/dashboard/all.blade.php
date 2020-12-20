@extends("admin.layout.index")
@section("admin_content")
<div class="row row-sm">
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
        <i class="fas fa-film-alt float-right"></i>
            <h6 class="text-muted text-uppercase m-b-20">Movie</h6>
            <h2 class="m-b-20" data-plugin="counterup">{{$countMovie}}</h2>
            <p> <a class="text-muted" href="{{route('phim.index')}}"> Xem chi tiết</a> </p>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class=" icon far fa-user float-right"></i>
            <h6 class="text-muted text-uppercase m-b-20">Khách hàng</h6>
            <h2 class="m-b-20" data-plugin="counterup">{{$countUser}}</h2>
            <p> <a class="text-muted" href="{{Url('to/manage-user')}}"> Xem chi tiết</a> </p>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class=" icon far fa-newspaper float-right"></i>
            <h6 class="text-muted text-uppercase m-b-20">Tin tức</h6>
            <h2 class="m-b-20" data-plugin="counterup">{{$countNew}}</h2>
            <p> <a class="text-muted" href="{{Url('to/all-category-new')}}"> Xem chi tiết</a> </p>
        </div>
    </div>
   
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
        <i class=" icon far fa-camera-movie float-right"></i>
            <h6 class="text-muted text-uppercase m-b-20">Rạp</h6>
            <h2 class="m-b-20" data-plugin="counterup">{{$countTheater}}</h2>
            <p> <a class="text-muted" href="{{route('theater.index')}}"> Xem chi tiết</a> </p>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
        <i class="icon far fa-booth-curtain float-right"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Phòng</h6>
            <h2 class="m-b-20" data-plugin="counterup">{{$countRoom}}</h2>
            <p> <a class="text-muted" href="{{route('room.index')}}"> Xem chi tiết</a> </p>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
        <i class="icon far fa-comments float-right"></i>
            <h6 class="text-muted text-uppercase m-b-20">Bình luận </h6>
            <h2 class="m-b-20" data-plugin="counterup">{{$countComment}}</h2>
            <p> <a class="text-muted" href="{{route('comment.index')}}"> Xem chi tiết</a> </p>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
        <i class="icon far fa-popcorn float-right"></i>
            <h6 class="text-muted text-uppercase m-b-20">Book_Combo</h6>
            <h2 class="m-b-20" data-plugin="counterup">{{$countB_combo}}</h2>
            <p> <a class="text-muted" href="{{route('book_combo.index')}}"> Xem chi tiết</a> </p>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
        <i class="icon far fa-popcorn float-right"></i>

            <h6 class="text-muted text-uppercase m-b-20">Combo</h6>
            <h2 class="m-b-20" data-plugin="counterup">{{$countCombo}}</h2>
            <p> <a class="text-muted" href="{{route('combo.index')}}"> Xem chi tiết</a> </p>
        </div>
    </div>
</div>


@endsection