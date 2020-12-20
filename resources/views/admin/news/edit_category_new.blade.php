@extends('admin.layout.index')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           <h2>Cập nhật danh mục bài viết</h2>
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
                                <form role="form" action="{{URL::to('/update-category-new/'.$category_new->cate_new_id)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" name="cate_new_name" value="{{$category_new->cate_new_name}}" class="form-control" onkeyup="ChangeToSlug();" id="slug" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" name="cate_new_slug" value="{{$category_new->cate_new_slug}}" class="form-control" id="convert_slug" placeholder="Slug">
                                </div>               
                                <button type="submit" name="update_new_cate" class="btn btn-info ">Cập nhật danh mục bài viết</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection