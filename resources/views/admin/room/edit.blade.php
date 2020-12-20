@extends("admin.layout.index")
@section("admin_content")
<div class="container">
    <div class="row">
    <div class="col-md-12">
					<div class="main__title">
						<h2>Sửa Phòng</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-md-12">
            
					<form action="{{route('room.update', $row->roomId)}}" method="post" class="form" enctype="multipart/form-data">
					{{csrf_field()}}
					{!! method_field('patch') !!}
					<div class="row">
							<div class="col-md-12 col-md-7 form__content">
								<div class="row">                              
                                <div class="col-md-6">
                                        <label for="number">Số phòng</label>
										<input id="number" type="text" class="form-control" placeholder="Số phòng"  name="number" value="{{$row->number}}">
									</div>
                                    <div class="col-md-6">
                                        <label for="status">Trạng thái</label>
										<input id="status" type="text" class="form-control" placeholder="Trạng thái"  name="status"  value="{{$row->sub}}">
									</div>	
									<div class="col-md-6">
										<div class="form__gallery">
                                        <label for="tl">Chọn tên rạp</label>
											<select name="theaterId" class="form-control select2 mg-b-20">
											<option value="0">Chọn tên rạp</option>
												<!-- Lấy các thể loại từ db hiện trong select  -->
                                                @php 
                                                    $kq = App\Models\theater::select('theaterId','name')->get();
                                                    @endphp 
                                                    @foreach ($kq as $rowTL)  
                                                    <option value="{{$rowTL->theaterId}}">{{$rowTL->name}}</option>
                                                    @endforeach
                                                   
										</select>
										</div>
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