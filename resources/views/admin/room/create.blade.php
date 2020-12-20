@extends("admin.layout.index")
@section("admin_content")
<div class="container">
    <div class="row">
    <div class="col-md-12">
					<div class="main__title">
						<h2>Thêm phòng</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-md-12">
            
                <form action="{{route('room.store')}}" class="form" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="row">					
							<div class="col-md-12 col-md-7 form__content">
								<div class="row">
                               
                                <div class="col-md-6">
                                        <label for="name">Số phòng</label>
										<input id="name" type="text" class="form-control" placeholder="Số phòng"  name="number" >
									</div>
                                    <div class="col-md-6">
                                        <label for="sub">Trạng thái</label>
										<input id="sub" type="text" class="form-control" placeholder="Trạng thái"  name="status"  >
									</div>	
                               
								
								
                                    <div class="col-md-6">
										<div class="form__gallery">
                                        <label for="tl">Chọn tên rạp</label>
											<select name="theaterId" class="form-control select2 mg-b-20">
											<option value="0">Chọn tên rạp</option>
												<!-- Lấy các thể loại từ db hiện trong select  -->
											@php
											$kq = DB::select("select theaterId, name from theater ");
											foreach ( $kq as $rowTL ){
												echo "<option value='{$rowTL->theaterId}'>{$rowTL->name}</option>";
											}
											@endphp
										</select>
										</div>
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