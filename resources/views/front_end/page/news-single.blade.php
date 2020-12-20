@extends('front_end.index')
@section('content')
<?php
    $cate_new = DB::table('category_new') ->select("cate_new_name")
    ->offset(0)->limit(5)->get();
?>

        <div class="container section news">
            <div class="row">
                <div class="col-sm-7">
                    <article>
                    <img src="{{asset('public/upload/news/'.$new->new_image)}}"/>
                        <h2 class="no-underline"><?=$new->new_title?></h2>
                        
                        <div class="share_box clearfix">
                            <p><?=$new->new_content?></p>
                           
                            </div>
                             
                    </article>
                    </div>
                  
                    <aside class="col-sm-3 col-sm-push-1 sidebar">
                        <!-- <div class="widget">
                            <form>
                                <input type="text" placeholder="Search..." class="search" />
                                <i class="material-icons">search</i>
                            </form>
                        </div> -->
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
        </div>
@endsection