@extends('front_end.index')
@section('content')

<section class="theater">
        <div class="container">
            <div class="row">
                <article class="col-md-6">
                    <div class="box-title">
                        <h2 class="title-movie"><a href=""> Phim hôm nay</a></h2>
                        <div class="bot"></div>
                    </div>
                    <div class="row mb-3">
                        <!--Lịch-->
                        <div class="form-group col-md-6 col-md-12">
                            <div class="box-calendar" style="position: relative;">
                                <i class="icon-calendar fal fa-calendar-week"></i>
                                <input type="text" id="datepicker" >
                            </div>
                        </div>
                        <!--rạp-->
                        <div class="form-group col-md-6 col-md-12">
                            <select class="form-control" id="vitri" placeholder="Vị trí">
                                <option value="fe">Poly Tân Bình</option>
                                <option value="be">Poly Bình Dương</option>
                                <option value="te">Poly Thủ Đức</option>
                                <option value="di">Poly Nguyễn Kiệm</option>
                                <option value="di">Poly Đà Nẵng</option>
                                <option value="te">Poly Aeon Tân Phú</option>
                                <option value="di">Poly Vạn Hạnh Mall</option>
                                <option value="di">Poly Giga Mall</option>
                    </select>
                        </div>
                    </div>
                    <!--phim-->
                    <div class="box-mb">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="https://galaxycine.vn/media/2020/10/1/pawn300x450_1601539721012.jpg" class="img-thumbnail">
                            </div>
                            <div class="col-md-8">
                                <span class="title-movie">Đỉnh Sương Mù</span>
                                <p class="time"><i class="fas fa-history"></i> 87 phút</p>
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
                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <img src="https://galaxycine.vn/media/2020/10/1/pawn300x450_1601539721012.jpg" class="img-thumbnail">
                            </div>
                            <div class="col-md-8">
                                <span class="title-movie">Đỉnh Sương Mù</span>
                                <p class="time"><i class="fas fa-history"></i> 87 phút</p>
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
                        <hr>
                    </div>


                </article>

                <aside class="col-md-6">
                    <div class="box-title">
                        <h2 class="title-movie"><a href="">Giá vé</a></h2>
                        <div class="bot"></div>
                    </div>
                    <div class="btn-group btn-group-toggle mt-3" data-toggle="buttons">
                        <div class="box-option text-movie" style="margin-right: 10px;">
                            2D
                        </div>
                        <div class="box-option text-movie">
                            3D
                        </div>
                    </div>

                    <!--giave-->
                    <div class="box-mb">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="images/ve/banggiave-082019-3d_1567135215938.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                        <br>
                        <!--thongtin-->
                        <div class="box-title">
                            <h2 class="title-movie"><a href=""> Thông tin chi tiết</a></h2>
                            <div class="bot"></div>
                        </div>
                        <br>
                        <p> <small style="color: gray;">Địa chỉ:</small> Lầu 2 Sense City, số 9, Trần Hưng Đạo, P.5, Tp. Cà Mau</p>

                        <p> <small style="color: gray;">Số điện thoại:</small> 1900 2224</p>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4436496496146!2d106.62617681474963!3d10.853821992269022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175298945afff59%3A0xcf4afe79d65f5ddc!2sQuang%20Trung%20Software%20City!5e0!3m2!1sen!2s!4v1595433203815!5m2!1sen!2s"
                                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                        </div>
                    </div>

                </aside>
            </div>
        </div>
    </section>
    @endsection