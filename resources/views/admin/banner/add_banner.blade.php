@extends('admin.layout.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           <h2>Thêm Banner</h2>
                        </header>
                         <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body col-6" style="margin:auto;border-style: solid;border-bottom-width: thin;">

                            <div class="position-center ">
                                <form role="form" action="{{URL::to('/save-banner')}}" method="post" enctype='multipart/form-data'>
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên banner</label>
                                    <input type="text" name="banner_name" class="form-control" placeholder="Tên banner">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh</label>
                                    <input type="file" name="banner_image" class="form-control" id="form_photo" type="file" accept=".png, .jpg, .jpeg" multiple>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả</label>
                                    <textarea style="resize: none" rows="3" class="form-control" name="banner_desc" id="ckeditor" placeholder="Mô tả"></textarea>
                                </div>    
                                <button type="submit" name="add_banner" class="btn btn-info ">Thêm banner</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection