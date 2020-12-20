@extends("admin.layout.index")
@section("admin_content")
<div class="container">
    <div class="row">
    <div class="col-md-12">
					<div class="main__title">
						<h2>Thêm phim</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-md-12">
            
                <form action="{{route('phim.store')}}" class="form" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="row">					
							<div class="col-md-12 col-md-7 form__content">
								<div class="row">                              
                                <div class="col-md-6 form-group">
                                        <label for="name">Tên phim</label>
										<input id="name" type="text" class="form-control" placeholder="Tên phim"  name="name" >
									</div>								
                                    <div class="col-md-6 form-group">
										<div class="form__gallery">
											<label id="gallery1" for="form_photo">Hình </label>
											<input data-name="#gallery1" id="form_photo" name="row" class="form-control" type="file" accept=".png, .jpg, .jpeg" multiple>
										</div>
									</div>
                                    <div class="col-md-6 form-group">
                                        <label for="content">Trailer</label>
										<input id="content" type="text" class="form-control" placeholder="Trailer"  name="trailer"  >
									</div>	
									<div class="col-md-3 form-group">
                                        <label for="price">Giá vé</label>
										<input id="price" type="text" class="form-control" placeholder="Giá"  name="price"  >
									</div>	
									<div class="col-md-3 form-group">
                                        <label for="phimhot">Phim hot</label>
										<input id="phimhot" type="text" class="form-control" placeholder="Phim hot"  name="phimhot"  >
									</div>	
									<div class="col-md-12 form-group col-sm-6 col-lg-3">
                                        <label for="time">Thời gian chiếu</label>
										<input id="time" type="text" class="form-control" placeholder="Thời gian" name="time" >
									</div>
									<div class="col-md-12 form-group col-sm-6 col-lg-3">
                                    <label for="date">Ngày chiếu </label>
										<input id="date" type="date" class="form-control" placeholder="Ngày chiếu" name="release_date" >
									</div>
									<div class="col-md-12 form-group  col-lg-3">
                                        <label for="dd">Đạo diễn</label>
										<input id="dd" type="text" class="form-control" placeholder="Đạo diễn" name="director" >
									</div>
									<div class="col-md-12 form-group  col-lg-3">
                                        <label for="dv">Diễn viên</label>
										<input id="dv" type="text" class="form-control" placeholder="Diễn Viên" name="actor" >
									</div>
									<div class="col-md-12 form-group  col-lg-3">
                                        <label for="qg">Quốc gia</label>
										<input id="qg" type="text" class="form-control" placeholder="Quốc gia" name="nation" >
									</div>
									<div class="col-md-12 form-group  col-lg-3">
                                        <label for="nsx">Nhà sản xuất</label>
										<input id="nsx" type="text" class="form-control" placeholder="Nhà sản xuất" name="producer" >
									</div>
									<div class="col-md-12 form-group  col-lg-3">
                                        <label for="nn">Ngôn ngữ</label>
										<input id="nn" type="text" class="form-control" placeholder="Ngôn ngữ" name="language" >
									</div>
									<div class="col-md-12 form-group col-lg-3">
									<label for="tl">Chọn thể loại</label>
											<select name="id_tl" class="form-control select2 mg-b-20">
											<option value="0">Chọn thể loại</option>
												<!-- Lấy các thể loại từ db hiện trong select  -->
											@php
											$kq = DB::select("select id_tl, ten_tl from category_movie ");
											foreach ( $kq as $rowTL ){
												echo "<option value='{$rowTL->id_tl}'>{$rowTL->ten_tl}</option>";
											}
											@endphp
										</select>
									</div>	
									<div class="col-md-12">
                                        <label for="content">Nội dung</label>
										<textarea value="content" rows="3" id="demo" name="content" class="form-control ckeditor" placeholder="Nội dung"></textarea>
									</div>
											
									
								</div>
								<div class="col-md-12 mt-3">								
									<button type="submit" class="btn btn-primary">Tạo</button>								
								</div>
							</div>							
						
						</div>
					</form>               
				</div>
    </div>
</div>
                @endsection