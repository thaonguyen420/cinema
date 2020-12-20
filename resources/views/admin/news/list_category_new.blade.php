@extends("admin.layout.index")
@section("admin_content")
<div class="row">
                        <div class="col-12">
                            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title">Thể loại Tin Tức</h4>
                                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                        <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            
                                        <th>Tên danh mục</th>
                                        <th>Slug</th>
                                        <th>Sửa</th>
                                        <th>Xoá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($category_new as $key => $cate_new)
                                        <tr >
                                        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                        <td>{{ $cate_new->cate_new_name }}</td>
                                        <td>{{ $cate_new->cate_new_slug }}</td>
                                        <td>
                                          <a href="{{URL::to('/edit-category-new/'.$cate_new->cate_new_id)}}" class="active styling-edit" ui-toggle-class="">
                                            <i class="fa fa-pencil-square-o text-success text-active"></i></a> </td>
                                            <td>
                                          <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')" href="{{URL::to('/delete-category-new/'.$cate_new->cate_new_id)}}" class="active styling-edit" ui-toggle-class="">
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