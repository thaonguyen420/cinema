@extends('front_end.index')
@section('content')
<?php  $id_tl =3 ?>
<?php
                    $ten_tl = DB::table('category_movie')->where("id_tl",$id_tl)->value("ten_tl");
                    $movies =DB::table('movies')->select('movieId', 'name','row')
                    ->join('category_movie', 'movies.id_tl', '=', 'category_movie.id_tl')
                    ->where('movies.id_tl','=',$id_tl)
                    ->offset(0)->limit(5)->get();
                ?>
<?php 
                  $psc = DB::table('movies')->select('movieId','row', 'name','time','release_date','trailer')
                    ->offset(0)->limit(5)->get();
                ?>
<?php 
     $new = DB::table('news') ->select('new_id','new_title','new_desc','new_content','new_image')->paginate(4);
     
                ?>


<div class="container section">
    <div class="row">
        <div class="col-sm-12">


            <h2>Phim sắp chiếu</h2>

            <div class="slick-carousel" id="newIn">
                @foreach($psc as $sc)
                <div class="movie-slide">
                    <div class="movie-poster">
                        <aside>
                            <div>
                                <a href="https://www.youtube.com/embed/{{$sc->trailer}}" data-vbtype="video" class="venobox play">
                                    <i class="material-icons">play_arrow</i>
                                </a>
                                <a href="{{URL::to('single-movie/'.$sc->movieId)}}" class="read-more">Mua vé</a>
                                <span class="date"><?=$sc->release_date?></span>
                            </div>
                        </aside>
                        <img src="<?=$sc->row?>" alt="Movie title" class="w-100" />
                        </a>
                    </div>
                    <h4 class="no-underline title-psc"> <a href="{{URL::to('single-movie/'.$sc->movieId)}}"><?=$sc->name?> </a></h4>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container section">
        <div class="row">
            <div class="col-sm-12">
                <div class="tab movies tab-wrapper">
                    <?php 
                    
                    $listphim= DB::table("movies")->join('category_movie', 'movies.id_tl', '=', 'category_movie.id_tl')->get();
                    $ten_tl= DB::table("category_movie")->get();
                    ?>
                    <div class="tab-wrapper">
                        <ul class="tab">
                            @foreach($ten_tl as $tl)
                            <li>
                                <a href="#tab-main-{{$tl->id_tl}}">{{$tl->ten_tl}}</a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach($listphim as $phim)
                            <div class="tab-item" id="tab-main-{{$phim->id_tl}}">
                            <?php
                                $showPhim=DB::table('movies')->join('category_movie', 'movies.id_tl', '=', 'category_movie.id_tl')->where('movies.id_tl','=',$phim->id_tl)->get();
                            ?>
                            @foreach($showPhim as $p)
                            <div class="row movie-tabs" style="margin-top:20px">
                                <div class="col-md-2 col-sm-3">
                                    <a href="{{URL::to('single-movie/'.$p->movieId)}}">
                                        <img src="{{$p->row}}" alt="Movie title"  />
                                    </a>
                                </div>
                                <div class="col-md-10 col-sm-9">
                                
                                    <span class="title">{{$p->name}}</span>                               
                                    <p class="box-content" style="margin-top:20px">{{$p->content}}</p>
                                    <p ><a href="{{URL::to('single-movie/'.$p->movieId)}}" class="arrow-button">Đọc thêm</a></p>
                                    
                                </div>
                            </div> 
                            @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
<section class="dark">

                   <?php
                   $phimhot = DB::table('movies')
                   ->join('category_movie', 'movies.id_tl', '=', 'category_movie.id_tl')
                   ->where('movies.phimhot','=','1')->get();
                   
                    ?>
    <div class="container section remove-bottom-padding">
        <div class="row comingSoon-slides ">
            <div class="col-sm-12">
                <h2>Phim hot</h2>
                @foreach( $phimhot as $phim)
                <div class="row single-slide slideOne{{$phim->movieId}}">
                <div class="bg" style="background: url(images/slide-1.png);"></div>
                <div class="col-sm-5 col-xs-12 slide-content">
                    <h3 class="title no-underline" style="margin-bottom: 30px;">{{$phim->name}}</h3>
                   
                    <div class="date">
                        <i class="material-icons">date_range</i> 
                        {{date("d/m/Y",strtotime($phim->release_date))}}
                    </div>
                    <p> {{$phim->content}}</p>
                    <p><a href="{{URL::to('single-movie/'.$phim->movieId)}}" class="arrow-button">Xem thêm</a></p>
                </div>
                <div class="col-sm-6 col-xs-12 col-sm-push-1 slide-video">
                    <a href="https://www.youtube.com/embed/{{$phim->trailer}}" data-vbtype="video" class="venobox video">
                        <i class="material-icons">play_arrow</i>
                        <img src="{{$phim->row}}" alt="" style="
    width: 100%;
    height: 400px;
    object-fit: contain;
"/>
                    </a>
                </div>
            </div>
            @endforeach 
               
                <div class="slick-carousel" id="comingSoon">
                @foreach($phimhot as $ph)
                <div data-dynamicclass="slideOne{{$ph->movieId}}">
                    <a href="#">
                        <img src="{{$ph->row}}" alt="">
                    </a>
                    <h5 class="left no-underline">{{$ph->name}}</h5>
                </div>
                @endforeach
                </div>
                </a>
            </div>
        </div>
    </div>
</section>
<div class="container section news">
    <div class="row">
        <div class="col-sm-12">
            <h2>Blog điện ảnh</h2>
            <hr class="space-40" />
            <div class="row">
                <div class="col-sm-12">              
                    <div class="slick-carousel news-carousel">                     
                            @foreach($new as $tin)
                            <div class="blog-item"> 
                                <div class="movie-poster">
                                    <aside>
                                        <div>
                                            <a href="{{URL::to('news-single/'.$tin->new_id)}}" class="play" tabindex="0">
                                                <i class="material-icons">link</i>
                                            </a>
                                            <a href="{{URL::to('news-single/'.$tin->new_id)}}" class="read-more" tabindex="0">Đọc thêm</a>
                                        </div>
                                    </aside>
                                    <a href="news-single.html">
                                        <img src="{{asset('public/upload/news/'.$tin->new_image)}}" height="300" width="400"/>
                                    </a>
                                </div>
                               
                                <!-- /.blog-item-info -->
                                <div class="blog-item-text">
                                    <h3><a href="{{URL::to('news-single/'.$tin->new_id)}}"><?=$tin->new_title?></a></h3>
                                    <div class="blog-content ">
                                        <p><?=$tin->new_desc?></p>

                                    </div>
                                </div>
                                <!-- /.blog-item-text -->
                            </div>
                        
                        @endforeach
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection