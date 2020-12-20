@extends('front_end.index')
@section('content')

<div class="container">
            <div class="row">
                <div class="col-md-9 px-2">
                    <div class="ticket-wrapper">
                        <section class="booking-bg">
                            <div class="row">
                                <div class="col-md-12">
                                    <section class="booking-ticket">
                                        <h2 id="choose-ticket-food" class="booking-title">Chọn vé/thức ăn</h2>
                                        <div class=table-responsive>
                                            <table class="table table-striped booking-ticket-table">
                                                <colgroup>
                                                    <col width=45%>
                                                    <col width=25%>
                                                    <col width=15%>
                                                    <col width=15%>
                                                </colgroup>
                                                <thead>
                                                    <tr class="tick-first">
                                                        <th>Loại vé</th>
                                                        <th>Số lượng</th>
                                                        <th>Giá (VNĐ)</th>
                                                        <th>Tổng (VNĐ)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="ng-scope">
                                                        <td>
                                                            <p><b>Ve 2D Thanh Vien</b></p>
                                                            <p class="des-corn">Vé 2D-Chỉ áp dụng khách hàng thành viên</p>
                                                        </td>
                                                        <td>
                                                            <div class="button-buy">
                                                                <i class="fal fa-plus"></i>
                                                                <input type="number" style="width:60px;margin: 0px 10px;">
                                                                <i class="fal fa-minus"></i>
                                                            </div>
                                                        </td>
                                                        <td>85,000</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr class="total">
                                                        <td colspan="3">Tổng</td>
                                                        <td>0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-striped booking-ticket-table">
                                                <colgroup>
                                                    <col width="45%">
                                                    <col width="25%">
                                                    <col width="15%">
                                                    <col width="15%">
                                                </colgroup>
                                                <thead>
                                                    <tr class="tick-first">
                                                        <th>Combo</th>
                                                        <th>Số lượng</th>
                                                        <th>Giá (VNĐ)</th>
                                                        <th>Tổng (VNĐ)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="4">
                                                            <table class="table table-striped booking-ticket-table">
                                                                <colgroup>
                                                                    <col width="45%">
                                                                    <col width="25%">
                                                                    <col width="15%">
                                                                    <col width="15%">
                                                                </colgroup>
                                                                <tbody>
                                                                    <tr class="ng-scope">
                                                                        <td style="display: flex;">
                                                                            <img src="images/combo-1.jpg" style="width:80px;">
                                                                            <div class="des-item" style="padding-left: 10px;">
                                                                                <p><b>iCombo 1 Big</b></p>
                                                                                <p class="des-corn ">1 BẮP + 1 NƯỚC NGỌT 32 Oz</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="button-buy">
                                                                                <i class="fal fa-plus"></i>
                                                                                <input type="number" style="width:60px;margin: 0px 10px;">
                                                                                <i class="fal fa-minus"></i>
                                                                            </div>
                                                                        </td>
                                                                        <td>72,000</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr class="total">
                                                        <td colspan="3">Tổng</td>
                                                        <td>0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </section>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="ticket-wrapper">
                        <div class="booking-bg">
                            <section class="booking-ticket">
                                <h3 class="booking-title">Chọn ghế</h3>
                                <div class="seat-map-wrapper">
                                    <div class="seat-map">
                                        <ul class="seat-row">
                                            <li class="index">G</li>
                                            <li id="G1" (click)="seat('G1')">1</li>
                                            <li id="G2" (click)="seat('G2')">2</li>
                                            <li id="G3" (click)="seat('G3')">3</li>
                                            <li id="G4" (click)="seat('G4')">4</li>
                                            <li id="G5" (click)="seat('G5')">5</li>
                                            <li id="G6" (click)="seat('G6')">6</li>
                                            <li id="G7" (click)="seat('G7')">7</li>
                                            <li id="G8" (click)="seat('G8')">8</li>
                                            <li id="G9" (click)="seat('G9')">9</li>
                                            <li id="G10" (click)="seat('G10')">10</li>
                                            <li class="index">G</li>
                                        </ul>
                                        <ul class="seat-row">
                                            <li class="index">F</li>
                                            <li id="F1" (click)="seat('F1')">1</li>
                                            <li id="F2" (click)="seat('F2')">2</li>
                                            <li id="F3" (click)="seat('F3')">3</li>
                                            <li id="F4" (click)="seat('F4')">4</li>
                                            <li id="F5" (click)="seat('F5')">5</li>
                                            <li id="F6" (click)="seat('F6')">6</li>
                                            <li id="F7" (click)="seat('F7')">7</li>
                                            <li id="F8" (click)="seat('F8')">8</li>
                                            <li id="F9" (click)="seat('F9')">9</li>
                                            <li id="F10" (click)="seat('F10')">10</li>
                                            <li class="index">F</li>
                                        </ul>
                                        <ul class="seat-row">
                                            <li class="index">E</li>
                                            <li id="E1" (click)="seat('E1')">1</li>
                                            <li id="E2" (click)="seat('E2')">2</li>
                                            <li id="E3" (click)="seat('E3')">3</li>
                                            <li id="E4" (click)="seat('E4')">4</li>
                                            <li id="E5" (click)="seat('E5')">5</li>
                                            <li id="E6" (click)="seat('E6')">6</li>
                                            <li id="E7" (click)="seat('E7')">7</li>
                                            <li id="E8" (click)="seat('E8')">8</li>
                                            <li id="E9" (click)="seat('E9')">9</li>
                                            <li id="E10" (click)="seat('E10')">10</li>
                                            <li class="index">E</li>
                                        </ul>
                                        <ul class="seat-row">
                                            <li class="index">D</li>
                                            <li id="D1" (click)="seat('D1')">1</li>
                                            <li id="D2" (click)="seat('D2')">2</li>
                                            <li id="D3" (click)="seat('D3')">3</li>
                                            <li id="D4" (click)="seat('D4')">4</li>
                                            <li id="D5" (click)="seat('D5')">5</li>
                                            <li id="D6" (click)="seat('D6')">6</li>
                                            <li id="D7" (click)="seat('D7')">7</li>
                                            <li id="D8" (click)="seat('D8')">8</li>
                                            <li id="D9" (click)="seat('D9')">9</li>
                                            <li id="D10" (click)="seat('D10')">10</li>
                                            <li class="index">D</li>
                                        </ul>
                                        <ul class="seat-row">
                                            <li class="index">C</li>
                                            <li id="C1" (click)="seat('C1')">1</li>
                                            <li id="C2" (click)="seat('C2')">2</li>
                                            <li id="C3" (click)="seat('C3')">3</li>
                                            <li id="C4" (click)="seat('C4')">4</li>
                                            <li id="C5" (click)="seat('C5')">5</li>
                                            <li id="C6" (click)="seat('C6')">6</li>
                                            <li id="C7" (click)="seat('C7')">7</li>
                                            <li id="C8" (click)="seat('C8')">8</li>
                                            <li id="C9" (click)="seat('C9')">9</li>
                                            <li id="C10" (click)="seat('C10')">10</li>
                                            <li class="index">C</li>
                                        </ul>
                                        <ul class="seat-row">
                                            <li class="index">B</li>
                                            <li id="B1" (click)="seat('B1')">1</li>
                                            <li id="B2" (click)="seat('B2')">2</li>
                                            <li id="B3" (click)="seat('B3')">3</li>
                                            <li id="B4" (click)="seat('B4')">4</li>
                                            <li id="B5" (click)="seat('B5')">5</li>
                                            <li id="B6" (click)="seat('B6')">6</li>
                                            <li id="B7" (click)="seat('B7')">7</li>
                                            <li id="B8" (click)="seat('B8')">8</li>
                                            <li id="B9" (click)="seat('B9')">9</li>
                                            <li id="B10" (click)="seat('B10')">10</li>
                                            <li class="index">B</li>
                                        </ul>
                                        <ul class="seat-row">
                                            <li class="index">A</li>
                                            <li id="A1" (click)="seat('A1')">1</li>
                                            <li id="A2" (click)="seat('A2')">2</li>
                                            <li id="A3" (click)="seat('A3')">3</li>
                                            <li id="A4" (click)="seat('A4')">4</li>
                                            <li id="A5" (click)="seat('A5')">5</li>
                                            <li id="A6" (click)="seat('A6')">6</li>
                                            <li id="A7" (click)="seat('A7')">7</li>
                                            <li id="A8" (click)="seat('A8')">8</li>
                                            <li id="A9" (click)="seat('A9')">9</li>
                                            <li id="A10" (click)="seat('A10')">10</li>
                                            <li class="index">A</li>
                                        </ul>
                                    </div>
                                    <div class="screen">Màn hình</div>
                                    <div class="seat-cinema row">
                                        <span class="seat-cinema-selected col">
                                            <div></div>
                                            Ghế đang chọn
                                        </span>
                                        <span class="seat-cinema-unavailable col">
                                            <div></div>
                                            Ghế đã bán
                                        </span>
                                        <span class="seat-cinema-normal col">
                                            <div></div>
                                            Có thể chọn
                                        </span>
                                        <span class="seat-cinema-area col">
                                            <div></div>
                                            Không thể chọn
                                        </span>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="ticket-wrapper">
                        <div class="booking-bg">
                            <div class="row">
                                <div class="col-md-12">
                                    <section id="pay-ticket" class="booking-ticket">
                                        <h2 class="booking-title">Vui lòng thanh toán</h2>

                                        <form class="form-horizontal" style="padding:30px ">

                                            <div class="form-group">

                                                <label class="col-sm-4 control-label">Hình thức thanh toán</label>

                                                <div class="col-md-8">
                                                    <select class="form-control">
                                                        <option selected>
                                                            Chọn loại thẻ
                                                        </option>
                                                        <option>
                                                            Ví Điện Tử MoMo
                                                        </option>
                                                        <option>
                                                            OnePay-ATM Card
                                                        </option>
                                                        <option>
                                                            ZaloPay- ATM Card/Visa/Master
                                                        </option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class=" col-sm-4 control-label">Họ và Tên</label>
                                                <div class="col-md-8">
                                                    <input id="name" placeholder="Họ tên" type="text" required class="login input-booking ">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Email</label>
                                                <div class="col-md-8">
                                                    <input id="email" placeholder="Email" type="email" required class="login input-booking" value=nguyenltps08795@fpt.edu.vn>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="">
                                                    <label class="col-md-4 control-label">Số điện thoại</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input id="phone" placeholder="Số điện thoại" type="text" required class="login input-booking" value="0843503999">
                                                </div>
                                            </div>
                                            <div class="row notice-infopayment">
                                                <div class="col-md-7 col-md-push-3">
                                                    <span>(*) Bằng việc click/chạm vào THANH TOÁN, bạn đã
                                                        xác nhận hiểu rõ các
                                                        &nbsp;</span>
                                                    <span>
                                                            <a href="https://www.galaxycine.vn/khuyen-mai/quy-dinh-giao-dich-truc-tuyen-tai-galaxy-cinema">Quy
                                                            Định Giao Dịch Trực Tuyến</a>
                                                        </span>

                                                </div>
                                            </div>
                                            <div class=row>
                                                <div class="col-md-3"><label class="control-label"></label></div>
                                                <div class="col-md-5">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <a class="venobox btn btn-default vbox-item click"> <span>Quay lại</span> </a>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <a class="venobox btn btn-default vbox-item click"> <span>Thanh toán</span> </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="pay-notice content-text"></div>
                                                </div>
                                            </div>
                                        </form>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 px-2">
                    <section class="ticket-header" style="top:0px">
                        <div class="ticket-feature">
                            <article class="row">
                                <div style="text-align:center" class="col-md-12"><img src="images/phim1.jpg">
                                </div>
                                <div class="col-md-12">
                                    <div class="ticket-detail">
                                        <h3 class="ticket-title upper-text no-underline">Đỉnh Mù Sương</h3>

                                        <div class="ticket-icon"><span><i class="icon-c18"></i><span class="notice">(*) Phim
                                                            chỉ dành cho khán giả từ 18 tuổi trở lên</span></span>
                                        </div>
                                        <div class="ticket-info">
                                            <p><b>Rạp: &nbsp;</b>Galaxy Nguyễn Du&nbsp; | RAP 4&nbsp;</p>
                                            <p><b>Suất chiếu: &nbsp;</b>18:15&nbsp; | Thứ sáu, 24/07/2020</p>
                                            <p><b>Combo: &nbsp;</b>
                                                <p><b>Ghế: &nbsp;<span id="chair"></span> </b></p>
                                        </div>
                                        <div class="ticket-price-total">
                                            <p>Tổng: &nbsp;
                                                <span> VNĐ</span>
                                            </p>
                                        </div>
                                        <div style="margin-top:30px">
                                            <a class="venobox btn btn-default vbox-item click"> <span>Quay lại</span> </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        @endsection