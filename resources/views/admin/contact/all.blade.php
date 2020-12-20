@extends("admin.layout.index")
@section("admin_content")
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title">Liên hệ</h4>
            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Id </th>
                        <th>Tên</th>
                        <th>Nội dung</th>
                        <th>Email</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ds as $tt)
                    <tr>
                        <td>
                            {{$tt->id}}
                        </td>
                        <td>
                            {{$tt->name}}
                        </td>
                       
                        <td>
                            {{$tt->content}}
                        </td>
                        <td>
                            {{$tt->email}}
                        </td>
                        <td>
                            <form action="{{route('contact_Ad.destroy',$tt->id)}}" method="post">
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