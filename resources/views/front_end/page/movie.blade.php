@extends('front_end.index')
@section("content")             
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
                                $showPhim=DB::table('movies')->join('category_movie', 'movies.id_tl', '=', 'category_movie.id_tl')->where('movies.id_tl','=',$phim->id_tl)->limit(4)->get();
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
                                    <p class="box-content box-movie" style="margin-top:20px">{!! $p->content !!}</p>
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
@endsection