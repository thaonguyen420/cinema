@extends('admin.layout.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           <h2>Thêm bài viết</h2>
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
                                <form role="form" action="{{URL::to('/save-new')}}" method="post" enctype='multipart/form-data'>
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên bài viết</label>
                                    <input type="text" name="new_title" class="form-control" onkeyup="ChangeToSlug();" id="slug" placeholder="Tên bài viết">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" name="new_slug" class="form-control" id="convert_slug" placeholder="Slug">
                                </div>      
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tóm tắt bài viết</label>
                                    <textarea style="resize: none" rows="3" class="form-control" name="new_desc" id="ckeditor" placeholder="Mô tả bài viết"></textarea>
                                </div>    
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung bài viết</label>
                                    <textarea style="resize: none; " rows="2"  class="form-control" name="new_content" id="ckeditor1" placeholder="Nội dung bài viết"></textarea>
                                </div> 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh bài viết</label>
                                    <input type="file" name="new_image" class="form-control" id="form_photo" type="file" accept=".png, .jpg, .jpeg" multiple>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Meta từ khoá</label>
                                    <textarea style="resize: none" rows="2" class="form-control" name="new_meta_keywords" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                                </div> 
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục tin tức</label>
                                      <select name="cate_new_id" class="form-control input-sm m-bot15">
                                        @foreach($cate_new as $key => $cate)
                                            <option value="{{$cate->cate_new_id}}">{{$cate->cate_new_name}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>

                                <button type="submit" name="add_new_cate" class="btn btn-info ">Thêm bài viết</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection