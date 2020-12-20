@extends("admin.layout.index")
@section("admin_content")
<div class="row">
                        <div class="col-12">
                            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title">Tin Tức</h4>
                                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                      <th style="width:20px;">
                                      <label class="i-checks m-b-none">
                                        <input type="checkbox"><i></i>
                                      </label>
                                    </th>
                                    <th>Tên bài viết</th>
                                    <th>Slug</th>
                                    <th>Mô tả</th>
                                    <th>Nội dung</th>
                                    <th>Hình ảnh</th>
                                    <th>Từ khoá</th>
                                    <th>Thể loại</th>
                                    <th>Sửa</th>
                                    <th>Xoá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($new as $key => $tintuc)
                                        <tr >
                                        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                        <td>{{ $tintuc->new_title }}</td>
                                        <td>{{ $tintuc->new_slug }}</td>
                                        <td>{!! $tintuc->new_desc !!}</td>
                                        <td>{!! $tintuc->new_content !!}</td>
                                        <td><img src="{{asset('public/upload/news/'.$tintuc->new_image)}}" height="200" width="200"></td>
                                        <td>{{ $tintuc->new_meta_keywords }}</td>
                                        <td>{{ $tintuc->cate_new->cate_new_name }}</td>
                                        <td>
                                          <a href="{{URL::to('/edit-new/'.$tintuc->new_id)}}" class="active styling-edit" ui-toggle-class="">
                                            <i class="fa fa-pencil-square-o text-success text-active"></i></a> </td>
                                        <td>
                                          <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')" href="{{URL::to('/delete-new/'.$tintuc->new_id)}}" class="active styling-edit" ui-toggle-class="">
                                            <i class="fa fa-times text-danger text"></i>
                                          </a>
                                        </td>                                                  
                                    </tr>
                                    @endforeach
                            </tbody>  
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                    @endsection
                    @section('js_script')
                        <script src="{{asset('lib')}}/datatables/jquery.dataTables.js"></script>
                        <link href="{{asset('lib')}}/datatables/jquery.dataTables.css" rel="stylesheet">
                        <script>
                        $(function() {
                            $('#datatable-buttons').DataTable({
                                responsive: true,
                                pageLength: 2,
                                language: {
                                    searchPlaceholder: 'Tìm kiếm  ...',
                                    sSearch: '',
                                    lengthMenu: '_MENU_ items/page',
                                    paginate: {
                                        previous: " < ",
                                        next: " > "
                                    },
                                    lengthMenu: "Hiện _MENU_ tin trong mỗi trang",
                                    zeroRecords: "Không tìm thấy",
                                    info: "Đang hiện trang _PAGE_ trong _PAGES_ trang",
                                    infoEmpty: "Không có dòng nào",
                                    infoFiltered: "(Lọc trong _MAX_ tin)",
                                }
                            });
                        });
                        </script>
        @endsection