@extends("admin.layout.index")
@section("admin_content")
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title">Combo</h4>
            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Id </th>
                        <th>Tên khách hàng</th>
                        <th>Số phòng</th>
                        <th>Tên combo</th>
                        <th>Lịch trình </th>
                        
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ds as $tt)
                    <tr>
                        <td>
                            {{$tt->id_combo}}
                        </td>
                        <td>
                            @php $id_user = $tt->id_user; $tl = App\Models\User::find($id_user); if($tl!=null) echo $tl->name; @endphp
                        </td>
                        <td>
                            {{$tt->number}}
                        </td>
                        <td>
                            @php $id_combo = $tt->id_combo; $tl = App\Models\combo::find($id_combo); if($tl!=null) echo $tl->name; @endphp
                        </td>
                        <td>
                            @php $id_schedule = $tt->id_schedule; $tl = App\Models\schedule::find($id_schedule); if($tl!=null) echo $tl->date; @endphp
                        </td>
                        <td>
                            <form action="{{route('combo.destroy',$tt->id_combo)}}" method="post">
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