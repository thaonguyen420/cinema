@extends("admin.layout.index")
@section("admin_content")
<div class="container">
    <div class="row">
    <div class="col-md-12">
					<div class="main__title">
						<h2>Sửa phim</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-md-12">
            
					<form action="{{route('phim.update', $row->movieId)}}" method="post" class="form" enctype="multipart/form-data">
					{{csrf_field()}}
					{!! method_field('patch') !!}
					<div class="row">
							<div class="col-md-12 col-md-7 form__content">
								<div class="row">
                                <div class="col-md-6 form-group">
                                        <label for="name">Tên phim</label>
										<input id="name" type="text" class="form-control" placeholder="Tên phim"  name="name" value="{{$row->name}}">
									</div>
                                    <div class="col-md-6 form-group">
										<div class="form__gallery">
											<label id="gallery1" for="form_photo">Hình </label>
											<input data-name="#gallery1" id="form_photo" name="row" class="form-control" type="file" accept=".png, .jpg, .jpeg" multiple>
										</div>
									</div>
									<div class="col-md-6 form-group">
                                        <label for="content">Trailer</label>
										<input id="content" type="text" class="form-control" placeholder="Trailer"  name="trailer"  value="{{$row->trailer}}">
									</div>	
									<div class="col-md-3 form-group">
                                        <label for="price">Giá vé</label>
										<input id="price" type="text" class="form-control" placeholder="Giá"  name="price"   value="{{$row->price}}">
									</div>	
									<div class="col-md-3 form-group">
                                        <label for="phimhot">Phim hot</label>
										<input id="phimhot" type="text" class="form-control" placeholder="Phim hot"  name="phimhot"  value="{{$row->phimhot}}">
									</div>	
									<div class="col-md-12 col-sm-6 col-lg-3 form-group">
                                        <label for="time">Thời gian chiếu</label>
										<input id="time" type="text" class="form-control" placeholder="Thời gian" name="time"  value="{{$row->time}}">
									</div>
									<div class="col-md-12 col-sm-6 col-lg-3 form-group">
                                    <label for="date">Ngày chiếu </label>
										<input id="date" type="date" class="form-control" placeholder="Ngày chiếu" name="release_date"  value="{{$row->release_date}}">
									</div>
									<div class="col-md-12 col-sm-6 col-lg-3 form-group">
                                    <label for="actor">Đạo diễn </label>
										<input id="actor" type="text" class="form-control" placeholder="Đạo diễn" name="director"  value="{{$row->director}}">
									</div>
									<div class="col-md-12 col-sm-6 col-lg-3 form-group">
                                    <label for="actor">Diễn viên </label>
										<input id="actor" type="text" class="form-control" placeholder="Diễn viên" name="actor"  value="{{$row->actor}}">
									</div>
									<div class="col-md-12 col-sm-6 col-lg-3 form-group">
                                    <label for="nation">Quốc gia </label>
										<input id="nation" type="text" class="form-control" placeholder="Quốc gia" name="nation"  value="{{$row->nation}}">
									</div>
									<div class="col-md-12 col-sm-6 col-lg-3 form-group">
                                    <label for="producer">Nhà sản xuất </label>
										<input id="producer" type="text" class="form-control" placeholder="Nhà sản xuất" name="producer"  value="{{$row->producer}}">
									</div>
									<div class="col-md-12 col-sm-6 col-lg-3 form-group">
                                    <label for="language">Ngôn ngữ </label>
										<input id="language" type="text" class="form-control" placeholder="Ngôn ngữ" name="language"  value="{{$row->language}}">
									</div>
										
									<div class="col-md-12 col-sm-6 col-lg-3 form-group"> 
										<label for="id_tl">Chọn thể loại</label>
										<select name="id_tl" class="form-control select2 mg-b-20">
											<option value="0">Chọn Thể Loại</option>
											<?php
											$kq = DB::select('select id_tl, ten_tl from category_movie');
											foreach($kq as $tl) {
												?>
												<option value='{{$tl->id_tl}}' <?=($row->id_tl === $tl->id_tl) ? 'selected' : '' ?>>{{$tl->ten_tl}}</option>";
												<?php
											};
											?>
										</select>    
									</div>
                                  
									
									
									<div class="col-md-12">
                                        <label for="content">Nội dung</label>
										<textarea rows="5"  id="demo" name="content" class="form-control ckeditor" placeholder="Nội dung">{{$row->content}}</textarea>
									</div>
									</div>				
									
								</div>
								<div class="col-md-12 mt-3">
								
								<button type="submit" class="btn btn-primary">Thay đổi</button>
						
					</div>
							</div>
							
						
						</div>
					</form>
               
				</div>
    </div>
</div>

                @endsection