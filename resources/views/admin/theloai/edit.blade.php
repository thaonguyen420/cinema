@extends("admin.layout.index")
@section("admin_content")
<div class="container">
    <div class="row">
    <div class="col-md-12">
					<div class="main__title">
						<h2>Sửa thể loại</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-md-12">
            
					<form action="{{route('theloai.update', $row->id_tl)}}" method="post" class="form" enctype="multipart/form-data">
					{{csrf_field()}}
					{!! method_field('patch') !!}
					<div class="row">							
							<div class="col-md-12 col-md-7 form__content">
								<div class="row">
                                <div class="col-md-6">
                                        <label for="name">Tên phim</label>
										<input id="name" type="text" class="form-control" placeholder="Tên phim"  name="ten_tl" value="{{$row->ten_tl}}">
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