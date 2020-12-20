@extends('front_end.index')
@section("content")
<style>
    section {
    margin: 20px 0px;
}

.news {
    padding: 40px 0px;
}

.box-blog {
    margin: 20px 0px;
}

.item-mv {
    width: 50%;
}

.box-news {
    margin: 30px 0px;
}

.mv-home img {
    width: 100%;
    object-fit: cover;
}

.title-movie a {
    color: rgb(67, 70, 75);
    font-size: 20px;
    font-weight: 500;
    text-transform: uppercase;
    position: relative;
    display: inline-block;
    ;
}

.title-movie a:after {
    content: "";
    position: absolute;
    border-bottom: 2px solid #fdcd00;
    width: 100%;
    opacity: 1;
    left: 0;
    bottom: -7px;
}

.badge {
    cursor: pointer;
}

.badge-primary {
    background-color: #007bff;
}

.tick span i {
    padding-right: 5px;
}

.badge-secondary {
    background-color: #6c757d;
    margin-left: 6px;
}

.mv-home {
    position: relative;
}

a .mv-content {
    position: absolute;
    width: 100%;
    height: 100%;
    display: none;
}

.mv-home:hover a .mv-content {
    background: #00000047;
    position: absolute;
    width: 100%;
    height: 100%;
    display: block;
    z-index: 5;
    top: 0;
    left: 0;
}

.btn.secondary-white {
    display: inline-block;
    font-size: 14px;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #ffffff;
    font-weight: 400;
    border: 1px solid #ffffff;
    padding: 15px 30px;
    text-decoration: none;
    line-height: 1;
    transition: all .4s;
}

.btn.secondary-white:hover {
    background: #fdcd00;
}

.btn.button-detal {
    background: #fdcd00;
    padding: 11px;
    line-height: 0;
    font-size: 11px;
    width: 100px;
}

.text-brief {
    margin: 12px 0px;
}

@media (min-width:996px) and (max-width:1399px) {
    .text-brief {
        margin: 7px 0px;
        font-size: 12px;
    }
    .btn.button-detal {
        padding: 9px;
    }
}

@media (min-width:996px) and (max-width:1199px) {
    .btn.button-detal {
        display: none;
    }
}
</style>
<section class="hot-news">
    <div class="row">
        <div class="col-lg-6">
            <div class="box-title ">
                <h2 class="title-movie"> <a href=""> Blog điện ảnh</a></h2>
                <div class="bot"></div>
            </div>
            <div class="box-blog ">
                <div class="row">
                    <div class="col-md-5 ">
                        <div class="mv-home">
                            <img src="../../../assets/tin/2560x1440_1595930517102.jpg" alt="">
                            <a href="">
                                <div class="mv-content">
                                </div>
                            </a>
                        </div>


                    </div>
                    <div class="col-md-7">
                        <div class="mv-main">
                            <h4 class="title-mv">20 năm là gì đó </h4>
                            <div class="tick">
                                <span class="badge badge-primary"><i class="fas fa-thumbs-up"></i> <strong>Thích</strong> 2</span>
                                <span class="badge badge-secondary"><i class="fas fa-eye"></i>21</span>
                            </div>
                            <p class="text-brief">Nếu có một bộ phim có thể giải cứu nền điện ảnh thế giới khỏi cơn khủng hoảng do ...</p>
                            <div class="btn secondary-white button-detal">Đọc tiếp <i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-blog ">
                <div class="row">
                    <div class="col-md-5 ">
                        <div class="mv-home">
                            <img src="../../../assets/tin/2560x1440_1595930517102.jpg" alt="">
                            <a href="">
                                <div class="mv-content">
                                </div>
                            </a>
                        </div>


                    </div>
                    <div class="col-md-7">
                        <div class="mv-main">
                            <h4 class="title-mv">20 năm là gì đó </h4>
                            <div class="tick">
                                <span class="badge badge-primary"><i class="fas fa-thumbs-up"></i> <strong>Thích</strong> 2</span>
                                <span class="badge badge-secondary"><i class="fas fa-eye"></i>21</span>
                            </div>
                            <p class="text-brief">Nếu có một bộ phim có thể giải cứu nền điện ảnh thế giới khỏi cơn khủng hoảng do ...</p>
                            <div class="btn secondary-white button-detal">Đọc tiếp <i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="box-title ">
                <h2 class="title-movie"> <a href=""> Blog điện ảnh</a></h2>
                <div class="bot"></div>
            </div>
            <div class="box-blog ">
                <div class="row">
                    <div class="col-md-5 ">
                        <div class="mv-home">
                            <img src="../../../assets/tin/2560x1440_1595930517102.jpg" alt="">
                            <a href="">
                                <div class="mv-content">
                                </div>
                            </a>
                        </div>


                    </div>
                    <div class="col-md-7">
                        <div class="mv-main">
                            <h4 class="title-mv">20 năm là gì đó </h4>
                            <div class="tick">
                                <span class="badge badge-primary"><i class="fas fa-thumbs-up"></i> <strong>Thích</strong> 2</span>
                                <span class="badge badge-secondary"><i class="fas fa-eye"></i>21</span>
                            </div>
                            <p class="text-brief">Nếu có một bộ phim có thể giải cứu nền điện ảnh thế giới khỏi cơn khủng hoảng do ...</p>
                            <div class="btn secondary-white button-detal">Đọc tiếp <i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-blog ">
                <div class="row">
                    <div class="col-md-5 ">
                        <div class="mv-home">
                            <img src="../../../assets/tin/2560x1440_1595930517102.jpg" alt="">
                            <a href="">
                                <div class="mv-content">
                                </div>
                            </a>
                        </div>


                    </div>
                    <div class="col-md-7">
                        <div class="mv-main">
                            <h4 class="title-mv">20 năm là gì đó </h4>
                            <div class="tick">
                                <span class="badge badge-primary"><i class="fas fa-thumbs-up"></i> <strong>Thích</strong> 2</span>
                                <span class="badge badge-secondary"><i class="fas fa-eye"></i>21</span>
                            </div>
                            <p class="text-brief">Nếu có một bộ phim có thể giải cứu nền điện ảnh thế giới khỏi cơn khủng hoảng do ...</p>
                            <div class="btn secondary-white button-detal">Đọc tiếp <i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection