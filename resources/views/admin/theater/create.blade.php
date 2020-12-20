@extends("admin.layout.index")
@section("admin_content")
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="main__title">
                <h2>Thêm rạp</h2>
            </div>
        </div>
        <!-- end main title -->

        <!-- form -->
        <div class="col-md-12">

            <form action="{{route('theater.store')}}" class="form" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-12 col-md-7 form__content">
                        <div class="row">

                            <div class="col-md-6">
                                <label for="name">Tên rạp</label>
                                <input id="name" type="text" class="form-control" placeholder="Tên rạp" name="name">
                            </div>
                            <div class="col-md-6">
                                <label for="sub">Địa chỉ</label>
                                <input id="sub" type="text" class="form-control" placeholder="Địa chỉ" name="address">
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