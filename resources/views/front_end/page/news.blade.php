@extends('front_end.index')
@section('content')
<?php
    $cate_new = DB::table('category_new') ->select("cate_new_name")
    ->offset(0)->limit(5)->get();
?>
<?php 
     $new = DB::table('news') ->select('new_id','new_title','new_desc','new_content','new_image')
     ->offset(0)->limit(5)->get();
?>

        <div class="container section news">
            <div class="row">
                <div class="col-sm-7">
                @foreach($new as $tin)
                    <article>
                    
                        <a href="{{URL::to('news-single/'.$tin->new_id)}}" class="img">
                            <aside>
                                <!-- <div>
                                    <i class="material-icons">link</i>
                                    <span class="date">7 Mar, 2017 by Lee Grant</span>
                                </div> -->
                            </aside>
                          
                            <img src="{{asset('public/upload/news/'.$tin->new_image)}}"/>
                        </a>
                        
                        <h2 class="no-underline"><?=$tin->new_title?></h2>
                        <p><?=$tin->new_desc?></p>
                        <a  href="{{URL::to('news-single/'.$tin->new_id)}}" class="btn btn-ghost">
                            <span>Đọc thêm</span>
                        </a>
                      
                    </article>
                    @endforeach
                </div>
                <aside class="col-sm-3 col-sm-push-1 sidebar">
                <div class="widget">
                            <h3>Danh mục tin tức</h3>
                            <ul>
                            @foreach($cate_new as $dmtin)
                                <li><a href="#"><?=$dmtin->cate_new_name?></a></li>
                            @endforeach
                            </ul>
                        </div>
                </aside>
            </div>
        </div>

        <!-- <div class="section small-padding border-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="pagination">
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><span>&hellip;</span></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
        @endsection

