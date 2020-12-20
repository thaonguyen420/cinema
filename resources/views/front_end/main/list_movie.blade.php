
<style>
    section {
    margin: 20px 0px;
}

img {
    width: 100%;
    height: auto;
    display: table-cell;
}

.tab-movies-line-wrap .active:after {
    content: "";
    position: absolute;
    border-bottom: 2px solid #fdcd00;
    width: 100%;
    opacity: 1;
    left: 0;
    bottom: -10px;
}

 

.movies-item {
    margin-top: 20px;
}

.tab-movies-line.active,
.title-movie,.tab-movies-line {
    color: rgb(67, 70, 75);
    margin-top: 13px;
    font-size: 20px;
    font-weight: 500;
    text-transform: uppercase;
    position: relative;
    text-decoration: none;
}

.tab-movies-line.active:after,
.title-movie:after {
    content: "";
    position: absolute;
    border-bottom: 2px solid #fdcd00;
    width: 100%;
    opacity: 1;
    left: 0;
    bottom: -7px;
}

.upper-text {
    font-size: 21px;
    font-weight: 400;
    margin-top: 11px;
    margin-bottom: 6px;
    letter-spacing: -1px;
    text-transform: uppercase;
}

.title-movie-vi {
    color: #5f5d5d;
    text-transform: capitalize;
    font-weight: 400;
    font-size: 17px;
    margin-bottom: 0px;
}

.overlay {
    z-index: 99;
    width: 100%;
    height: 100%;
    -webkit-transition: all 300ms;
    transition: all 300ms;
    opacity: 0;
    background-color: rgba(0, 0, 0, 0.7);
}

.decription-hover:hover.overlay {
    opacity: 1;
}

.decription-hover {
    position: absolute;
    top: 0;
    left: 0;
}

.movie {
    position: relative;
}

.movies-content {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    text-align: center;
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
}

.btn.secondary-white:hover {
    color: #ffffff;
    background-color: #fdcd00;
    border-color: #fdcd00;
}
</style>


<section class="list-movies">
    <div class="container">
        <div class="row">
                <ul class="nav " id="myTab" role="tablist">
            <li class="nav-item tab-movies-line-wrap mr-3" role="presentation">
                <a class=" tab-movies-line  active" id="home-tab" data-toggle="tab" href="#now" role="tab" aria-controls="home" aria-selected="true">Phim Đang Chiếu</a>
            </li>
            <li class="nav-item tab-movies-line-wrap" role="presentation">
                <a class=" tab-movies-line " id="contact-tab" data-toggle="tab" href="#soon" role="tab" aria-controls="contact" aria-selected="false">Phim Sắp Chiếu</a>
            </li>
        </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="now" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row movies-wrap">
                        <div class="col-12 col-sm-6 col-lg-3 movies-item" *ngFor="let mv of movies ">
                            <div class="movie ">
                                <img src="assets/phim/phim1.jpg" data-src="https://galaxycine.vn/media/2020/7/28/2560x1440_1595930517102.jpg" class="lazy loaded" data-was-processed="true">
                                <a href="">
                                    <div class="decription-hover overlay">

                                        <div class="movies-content">
                                            <div class="group">
                                                <div class="btn secondary-white"><a href="" class="button_click">Mua vé </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <h4 class="upper-text "><a href="">dsdsdsd</a> </h4>
                            <h5 class="vn  title-movie-vi">dsdsd</h5>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="soon" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row movies-wrap">
                        <div class="col-12 col-sm-6 col-lg-3 movies-item" *ngFor="let mv of movies ">
                            <div class="movie">
                                <img src="" data-src="https://galaxycine.vn/media/2020/7/28/2560x1440_1595930517102.jpg" class="lazy loaded" data-was-processed="true">
                                <a href="">
                                    <div class="decription-hover overlay">
                                        <div class="movies-content">
                                            <div class="group">
                                                <div class="btn secondary-white"><a href="">Đặt vé </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <h4 class="upper-text  "><a href=""></a></h4>
                            <h5 class="vn  title-movie-vi"></h5>
                        </div>
                        
                    </div>
                </div>
            </div>
     
        </div>
    </div>
    
</section>
