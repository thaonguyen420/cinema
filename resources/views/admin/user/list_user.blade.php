@extends("admin.layout.index")
@section("admin_content")
<div class="row">
                        <div class="col-12">
                            <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title">Tất cả người dùng</h4>
                                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                        <th style="width:20px;">
                                        <label class="i-checks m-b-none">
                                          <input type="checkbox"><i></i>
                                        </label>
                                      
                                        <th>Họ Tên</th>
                                      <th>Email</th>
                                      <th>Ngày sinh</th>
                                      <th>Quyền</th>
                                      <th>Xoá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($all_user as $key => $user)
                                        <tr >
                                      <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                      <td>{{ $user->name }}</td>
                                      <td>{{$user->email}}</td>
                                      <td>{{$user->born}}</td>
                                      <td>{{$user->power}}</td>
                                      <td>
                                        <a onclick="return confirm('Bạn có chắc là muốn xóa user này ko?')" href="{{URL::to('/delete-user/'.$user->id)}}" class="active styling-edit" ui-toggle-class="">
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
                                pageLength: 10,
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