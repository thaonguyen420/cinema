@extends("admin.layout.index")
@section("admin_content")
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title">Danh sách phòng</h4>
            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Id </th>
                        <th>Số phòng</th>
                        <th>Trạng thái</th>
                        <th>Tên rạp</th>
                        <th>Chỉnh</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ds as $tt)
                    <tr>
                        <td>
                            {{$tt->roomId}}
                        </td>
                        <td>
                            {{$tt->number}}
                        </td>
                        <td>
                            {{$tt->status}}
                        </td>
                        <td>
                            @php $theaterId = $tt->theaterId; $tl = App\Models\theater::find($theaterId); if($tl!=null) echo $tl->name; @endphp
                        </td>
                        <td>
                            <a href="{{route('room.edit',$tt->theaterId)}}"  class="btn btn-primary">
                                    Chỉnh
                                </a>  
                        </td>
                        <td>
                            <form action="{{route('room.destroy',$tt->roomId)}}" method="post">
                                {{csrf_field()}}
                                {!! method_field('delete') !!}
                                <button onclick="return confirm('Xóa thiệt hông?');" class="btn btn-danger"
                                    type="submit">Xóa</button>
                            </form>
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
            searchPlaceholder: 'Tìm kiếm ',
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