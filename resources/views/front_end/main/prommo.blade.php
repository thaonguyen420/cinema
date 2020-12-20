<style>
section {
    margin: 20px 0px;
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

.btn.primary {
    display: inline-block;
    font-size: 14px;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #ffffff;
    background-color: #fdcd00;
    text-decoration: none;
    line-height: 1
}

.btn.primary.btn-buyticket-box {
    padding: 11px 15px
}

.btn.primary:hover {
    background-color: #e26435
}

.btn.secondary {
    display: inline-block;
    font-size: 14px;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #fdcd00;
    border: 1px solid #fdcd00;
    padding: 15px 20px;
    text-decoration: none;
    line-height: 1
}

.btn.secondary:hover {
    color: #ffffff;
    background-color: #fdcd00;
    border-color: #fdcd00
}

.btn.secondary:after {
    font-family: 'FontAwesome';
    font-weight: 400;
    line-height: 1;
    content: '\f178';
    margin-left: 10px
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

.btn.secondary-white:focus {
    color: #ffffff;
    background-color: #fdcd00;
    border-color: #fdcd00
}

.btn-select {
    position: relative;
    padding: 0;
    width: 100%;
    border-radius: 0;
    margin-bottom: 15px
}

.btn-select.btn-select-light .btn-select-value {
    background-color: rgba(255, 255, 255, 0.4);
    width: 100%
}

.btn-select .btn-select-value {
    padding: 9px 12px;
    display: block;
    position: absolute;
    left: 0;
    right: 34px;
    text-align: left;
    text-overflow: ellipsis;
    overflow: hidden;
    border-top: none !important;
    border-bottom: none !important;
    border-left: none !important
}

.btn-select .btn-select-arrow {
    float: right;
    line-height: 20px;
    padding: 9px 10px;
    top: 0
}

.btn-select .btn-select-arrow:after {
    font-family: 'FontAwesome';
    font-weight: 400;
    line-height: 1;
    content: '\f107';
    margin-left: 5px
}

.btn-select select {
    display: block;
    position: absolute;
    left: 0;
    text-align: left;
    padding: 20px 20px 20px 12px;
    right: 35px;
    text-overflow: ellipsis;
    overflow: hidden;
    border: none;
    width: 100%;
    background: transparent;
    height: 0;
    -webkit-appearance: none
}

.btn-box-select-ticket .btn-select {
    border: 1px solid #ced0da;
    background-color: #ffffff
}

.btn-box-select-ticket .btn-select .btn-select-arrow {
    color: #43464b
}

.btn-box-select-ticket .btn-select-light .btn-select-value {
    color: #43464b
}

section {
    margin: 10px 0
}

.wrapper {
    flex: 1 0 auto
}

.pagination {
    border-radius: 0;
    font-size: 14px
}

.pagination>li>a {
    color: #a0a3a7
}

.pagination>li>a:hover,
.pagination>li>a.active,
.pagination>li>a>span:hover,
.pagination>li>a>span.active {
    color: #fdcd00
}

.pagination>li:first-child>a,
.pagination>li:first-child>span {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.pagination>li:last-child>a,
.pagination>li:last-child>span {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.pagination>.active>a,
.pagination>.active>a:focus,
.pagination>.active>a:hover {
    background-color: #fdcd00;
    border-color: #fdcd00
}

.promotion-item-home {
    position: relative;
    -webkit-transition: all 300ms;
    transition: all 300ms;
}

.promotion-item-home img {
    width: 100%;
    height: auto;
}

.promotion-item-home .info {
    position: absolute;
    width: 100%;
    padding: 20px;
    top: 5px
}

.promotion-item-home .info p {
    margin: 15px 0;
    color: #ffffff;
    line-height: 22px;
    display: block;
    display: -webkit-box;
    max-width: 100%;
    -webkit-line-clamp: 6;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis
}

.promotion-item-home .info h2 {
    font-size: 18px;
    line-height: 24px;
    text-transform: uppercase;
    color: #ffffff;
    display: block;
    display: -webkit-box;
    max-width: 100%;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis
}

.promotion-item-home .group {
    text-align: center;
    position: absolute;
    bottom: 5%;
    width: 100%
}

.promotion-item-home:hover .overlay {
    opacity: 1
}

.promotion-item-home .decription-hover {
    position: absolute;
    top: 0;
    left: 0
}

.promotion-item-home .overlay {
    z-index: 99;
    width: 100%;
    height: 100%;
    -webkit-transition: all 300ms;
    transition: all 300ms;
    opacity: 0;
    background-color: rgba(0, 0, 0, 0.7)
}

.promotion-item-home.offer {
    margin-top: 20px
}

.block-wrapper {
    margin: 30px 0
}
</style>
<section class="promo">
    <div class="box-title ">
        <h2 class="title-movie"> <a href="">Khuyến mãi</a></h2>
        <div class="bot"></div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6 ">
            <div class="promotion-item-home offer">
                <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang">
                    <img src="../../../assets/khuyenmai1.jpg" class="loaded">
                </a>
                <div class="decription-hover overlay hidden-xs">
                    <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang">
                        <div class="info">
                            <h2>Đua Top Săn Vàng</h2>

                            <p><span style="font-size:14px"><span
                                        style="font-family:Arial,Helvetica,sans-serif">Cặp nhẫn Doji
                                        trị giá 20 TRIỆU VNĐ, Movie Voucher đủ xem tới hết năm và Combo
                                        đặc biệt
                                        chưa-từng-có-tại-Việt-Nam... Đó là những phần quà siêu giá trị
                                        sẽ dành cho các Stars chiến
                                        thắng cuộc chơi <strong>ĐUA TOP SĂN VÀNG - Top thành viên chi
                                            tiêu cao nhất, tích lũy được
                                            nhiều Stars </strong>nhất từ 01/07 tới 30/09.</span></span>
                            </p>
                        </div>
                    </a>
                    <div class="group">
                        <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang"></a>
                        <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang" class="btn secondary-white">
                            chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 ">
            <div class="promotion-item-home offer">
                <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang">
                    <img src="../../../assets/khuyenmai1.jpg" class="loaded">
                </a>
                <div class="decription-hover overlay hidden-xs">
                    <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang">
                        <div class="info">
                            <h2>Đua Top Săn Vàng</h2>

                            <p><span style="font-size:14px"><span
                                        style="font-family:Arial,Helvetica,sans-serif">Cặp nhẫn Doji
                                        trị giá 20 TRIỆU VNĐ, Movie Voucher đủ xem tới hết năm và Combo
                                        đặc biệt
                                        chưa-từng-có-tại-Việt-Nam... Đó là những phần quà siêu giá trị
                                        sẽ dành cho các Stars chiến
                                        thắng cuộc chơi <strong>ĐUA TOP SĂN VÀNG - Top thành viên chi
                                            tiêu cao nhất, tích lũy được
                                            nhiều Stars </strong>nhất từ 01/07 tới 30/09.</span></span>
                            </p>
                        </div>
                    </a>
                    <div class="group">
                        <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang"></a>
                        <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang" class="btn secondary-white">
                            chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 ">
            <div class="promotion-item-home offer">
                <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang">
                    <img src="../../../assets/khuyenmai1.jpg" class="loaded">
                </a>
                <div class="decription-hover overlay hidden-xs">
                    <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang">
                        <div class="info">
                            <h2>Đua Top Săn Vàng</h2>

                            <p><span style="font-size:14px"><span
                                        style="font-family:Arial,Helvetica,sans-serif">Cặp nhẫn Doji
                                        trị giá 20 TRIỆU VNĐ, Movie Voucher đủ xem tới hết năm và Combo
                                        đặc biệt
                                        chưa-từng-có-tại-Việt-Nam... Đó là những phần quà siêu giá trị
                                        sẽ dành cho các Stars chiến
                                        thắng cuộc chơi <strong>ĐUA TOP SĂN VÀNG - Top thành viên chi
                                            tiêu cao nhất, tích lũy được
                                            nhiều Stars </strong>nhất từ 01/07 tới 30/09.</span></span>
                            </p>
                        </div>
                    </a>
                    <div class="group">
                        <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang"></a>
                        <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang" class="btn secondary-white">
                            chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3  col-sm-6 ">
            <div class="promotion-item-home offer">
                <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang">
                    <img src="../../../assets/khuyenmai1.jpg" class="loaded">
                </a>
                <div class="decription-hover overlay hidden-xs">
                    <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang">
                        <div class="info">
                            <h2>Đua Top Săn Vàng</h2>

                            <p><span style="font-size:14px"><span
                                        style="font-family:Arial,Helvetica,sans-serif">Cặp nhẫn Doji
                                        trị giá 20 TRIỆU VNĐ, Movie Voucher đủ xem tới hết năm và Combo
                                        đặc biệt
                                        chưa-từng-có-tại-Việt-Nam... Đó là những phần quà siêu giá trị
                                        sẽ dành cho các Stars chiến
                                        thắng cuộc chơi <strong>ĐUA TOP SĂN VÀNG - Top thành viên chi
                                            tiêu cao nhất, tích lũy được
                                            nhiều Stars </strong>nhất từ 01/07 tới 30/09.</span></span>
                            </p>
                        </div>
                    </a>
                    <div class="group">
                        <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang"></a>
                        <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang" class="btn secondary-white">
                            chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 ">
            <div class="promotion-item-home offer">
                <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang">
                    <img src="../../../assets/khuyenmai1.jpg" class="loaded">
                </a>
                <div class="decription-hover overlay hidden-xs">
                    <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang">
                        <div class="info">
                            <h2>Đua Top Săn Vàng</h2>

                            <p><span style="font-size:14px"><span
                                        style="font-family:Arial,Helvetica,sans-serif">Cặp nhẫn Doji
                                        trị giá 20 TRIỆU VNĐ, Movie Voucher đủ xem tới hết năm và Combo
                                        đặc biệt
                                        chưa-từng-có-tại-Việt-Nam... Đó là những phần quà siêu giá trị
                                        sẽ dành cho các Stars chiến
                                        thắng cuộc chơi <strong>ĐUA TOP SĂN VÀNG - Top thành viên chi
                                            tiêu cao nhất, tích lũy được
                                            nhiều Stars </strong>nhất từ 01/07 tới 30/09.</span></span>
                            </p>
                        </div>
                    </a>
                    <div class="group">
                        <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang"></a>
                        <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang" class="btn secondary-white">
                            chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 ">
            <div class="promotion-item-home offer">
                <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang">
                    <img src="../../../assets/khuyenmai1.jpg" class="loaded">
                </a>
                <div class="decription-hover overlay hidden-xs">
                    <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang">
                        <div class="info">
                            <h2>Đua Top Săn Vàng</h2>

                            <p><span style="font-size:14px"><span
                                        style="font-family:Arial,Helvetica,sans-serif">Cặp nhẫn Doji
                                        trị giá 20 TRIỆU VNĐ, Movie Voucher đủ xem tới hết năm và Combo
                                        đặc biệt
                                        chưa-từng-có-tại-Việt-Nam... Đó là những phần quà siêu giá trị
                                        sẽ dành cho các Stars chiến
                                        thắng cuộc chơi <strong>ĐUA TOP SĂN VÀNG - Top thành viên chi
                                            tiêu cao nhất, tích lũy được
                                            nhiều Stars </strong>nhất từ 01/07 tới 30/09.</span></span>
                            </p>
                        </div>
                    </a>
                    <div class="group">
                        <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang"></a>
                        <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang" class="btn secondary-white">
                            chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 ">
            <div class="promotion-item-home offer">
                <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang">
                    <img src="../../../assets/khuyenmai1.jpg" class="loaded">
                </a>
                <div class="decription-hover overlay hidden-xs">
                    <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang">
                        <div class="info">
                            <h2>Đua Top Săn Vàng</h2>

                            <p><span style="font-size:14px"><span
                                        style="font-family:Arial,Helvetica,sans-serif">Cặp nhẫn Doji
                                        trị giá 20 TRIỆU VNĐ, Movie Voucher đủ xem tới hết năm và Combo
                                        đặc biệt
                                        chưa-từng-có-tại-Việt-Nam... Đó là những phần quà siêu giá trị
                                        sẽ dành cho các Stars chiến
                                        thắng cuộc chơi <strong>ĐUA TOP SĂN VÀNG - Top thành viên chi
                                            tiêu cao nhất, tích lũy được
                                            nhiều Stars </strong>nhất từ 01/07 tới 30/09.</span></span>
                            </p>
                        </div>
                    </a>
                    <div class="group">
                        <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang"></a>
                        <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang" class="btn secondary-white">
                            chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3  col-sm-6 ">
            <div class="promotion-item-home offer">
                <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang">
                    <img src="../../../assets/khuyenmai1.jpg" class="loaded">
                </a>
                <div class="decription-hover overlay hidden-xs">
                    <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang">
                        <div class="info">
                            <h2>Đua Top Săn Vàng</h2>

                            <p><span style="font-size:14px"><span
                                        style="font-family:Arial,Helvetica,sans-serif">Cặp nhẫn Doji
                                        trị giá 20 TRIỆU VNĐ, Movie Voucher đủ xem tới hết năm và Combo
                                        đặc biệt
                                        chưa-từng-có-tại-Việt-Nam... Đó là những phần quà siêu giá trị
                                        sẽ dành cho các Stars chiến
                                        thắng cuộc chơi <strong>ĐUA TOP SĂN VÀNG - Top thành viên chi
                                            tiêu cao nhất, tích lũy được
                                            nhiều Stars </strong>nhất từ 01/07 tới 30/09.</span></span>
                            </p>
                        </div>
                    </a>
                    <div class="group">
                        <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang"></a>
                        <a href="https://www.galaxycine.vn/khuyen-mai/dua-top-san-vang" class="btn secondary-white">
                            chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>