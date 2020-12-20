@extends('front_end.index')
@section('content')

<div class="container section single-movie" style="padding-bottom:0px">
    <div class="row">
        <div class="col-sm-7">
            <h2>Phim</h2>
            <div class="row">
                <div class="col-sm-5">
                    <img src="{{$movies ->row}}" alt="Transformers: The Last Knight" class="poster">

                </div>
                <div class="col-sm-7">
                    <h2 class="no-underline text-title">{{$movies ->name}}</h2>

                    <ul class="movie-info">

                        <li><i>Nhà sản xuất :</i> <span class="text-detail">{{$movies ->producer}}</span> </li>
                        <li><i>Đạo diễn : </i> <span class="text-detail">{{$movies ->director}}</span></li>
                        <li><i>Diễn viên :</i> <span class="text-detail"> {{$movies ->actor}}</span></li>
                        <li><i>Quốc gia :</i> <span class="text-detail"> {{$movies ->nation}}</span></li>
                        <li><i>Ngày công chiếu:</i> <span class="text-detail">{{date("d/m/Y",strtotime($movies ->release_date))}}  </span></li>
                        <li><i>Thời lượng:</i> <span class="text-detail"> {{$movies ->time}}/phút</span></li>
                        <li><i>Ngôn ngữ :</i> <span class="text-detail"> {{$movies ->language}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-sm-push-1">
            <?php
                    $psc = DB::table('movies')->offset(0)->limit(3)->get();
                ?>

            <h2>Phim sắp chiếu</h2>
            @foreach($psc as $sc)
            <div class="movies-item" style="margin:30px 0px">
                <div class="row movie-tabs">
                    <div class="col-md-4 col-sm-3">
                        <a href="{{URL::to('single-movie/'.$sc->movieId)}}">
                            <img src="{{$sc->row}}" alt="Movie title" style="object-fit: cover;">
                        </a>
                    </div>
                    <div class="col-md-8 col-sm-9">
                        <span class="title" style="font-size:16px">{{$sc->name}}</span>
                        <div class="blog-content hidden-xs">
                            <p>
                                <span style="font-size:14px;">
                                    <span style="font-family:Arial,Helvetica,sans-serif;">
                                        <span style=" line-height:100%">
                                            <span style=" line-height:100%">
                                                {{$sc->content}}
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </p>
                        </div>
                        <time class="title" style="font-size:13px;color:black"> {{date("d/m/Y",strtotime($sc->release_date))}}</time>
                        <p><a href="{{URL::to('single-movie/'.$sc->movieId)}}" class="arrow-button">Đọc thêm</a></p>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<section>
    <div class="container section remove-bottom-padding">
        <div class="row comingSoon-slides singleGallery">
            <div class="col-sm-12">
                <h2>Tóm tắt nội dung</h2>
                <p>{{$movies ->content}}</p>
            </div>
        </div>
    </div>
</section>

<section class="dark">
    <div class="container section remove-bottom-padding">
        <div class="row comingSoon-slides singleGallery">
            <div class="col-sm-12">
                <div class="row single-slide slideOne">
                    <div class="bg"></div>
                    <div class="col-sm-12 slide-video" style="text-align: center;">
                    <iframe width="1000" height="500" src="https://www.youtube.com/embed/{{$movies ->trailer}}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="show_time">
        <h2>Lịch chiếu</h2>
        <div class="row ">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <select class="form-control">
                    <option>Cả nước</option>
                    <option>Cà Mau</option>
                    <option>Bến Tre</option>
                    <option>Vĩnh Long</option>
                    <option>Tây Ninh</option>
                </select>
            </div>


            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="box-calendar" style="position: relative;">
                    <i class="icon-calendar fal fa-calendar-week"></i>
                    <input type="text" id="datepicker">
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <select class="form-control">
                    <option>Tất cả các rạp</option>
                    <option>Cà Mau</option>
                    <option>Bến Tre</option>
                    <option>Vĩnh Long</option>
                    <option>Tây Ninh</option>
                </select>
            </div>
        </div>
    </div>
    <div class="box-buy">
        <div class="row ">
            <div class="col-md-12">
                <h5 class="ng-binding no-underline">Galaxy Nguyễn Du</h5>
                <div class="item-cinema">
                    <span class="text-movie">2D-Phụ đề</span>
                    <div class="item-box-movie">

                        <span class="box-movie text-movie">
                            10:15
                        </span>
                        <span class="box-movie text-movie">
                            10:15
                        </span>
                        <span class="box-movie text-movie">
                            10:15
                        </span>
                    </div>


                </div>
            </div>
        </div>

    </div>
    <div class="box-buy">
        <div class="row ">
            <div class="col-md-12">
                <h5 class="ng-binding no-underline">Galaxy Nguyễn Du</h5>
                <div class="item-cinema">
                    <span class="text-movie">2D-Phụ đề</span>
                    <div class="item-box-movie">
                        <span class="box-movie text-movie">
                            10:15
                        </span>
                        <span class="box-movie text-movie">
                            10:15
                        </span>
                        <span class="box-movie text-movie">
                            10:15
                        </span>
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>
<div class="container section single-movie">
    <div class="row">
        <div class="col-sm-7">
            <h2>Lời bình luận</h2>
            <div class="comments">
                @foreach($comment as $bl)
                <div class="row">
                    <div class="col-sm-2">
                        <img src="images/avatar.png" class="Luke Barrett" />
                    </div>
                    <div class="col-sm-9">
                        <span class="date">{{date("d/m/Y",strtotime($bl->date))}}   
                            <h4 class="no-underline" style="margin-top: 9px;
                            font-size: 16px;
                            text-transform: capitalize;">{{$bl->name}}</h4>
                            <p style="color: #7E7171;text-transform:none;font-size:14px">{!!$bl->content!!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-sm-4 col-sm-push-1">
            <h2>Bình luận</h2>
            <form action="comment/{{$movies->movieId}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Họ và tên *</label>
                    <input type="text" name="name" />
                </div>
                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" name="email" />
                </div>
                <div class="form-group">
                    <label>Nội dung *</label>
                    <textarea rows="5" name="content"></textarea>
                </div>
                <div class="form-group right-align">
                    <input class="form-control" type="submit">
                </div>
            </form>
        </div>
    </div>
</div>

</div>
@endsection