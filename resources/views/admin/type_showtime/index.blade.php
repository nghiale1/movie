@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Loại suất chiếu
@endsection

{{-- set title page --}}
@section('title-page')
    Loại suất chiếu
@endsection

{{-- set title direct --}}
@section('title-direct')
    Loại suất chiếu
@endsection

{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('type_showtime.add') }}" class="btn btn-primary">Thêm mới</a>
        </div>
    </div>
    <br>
    {{-- Nội dung --}}
    <div class="row">
        <div class="col-md-12">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Tên loại suất chiếu</th>
                        <th>Phụ thu loại suất chiếu</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; ?>
                    @foreach ($type_showtime as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->typest_name }}</td>
                        <td>{{ $item->extra_typest }}</td>
                        <td>
                            <a href="{{ route('type_showtime.edit', ['id'=>$item->id_typest]) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <a href="{{ route('type_showtime.destroy', ['id'=>$item->id_typest]) }}" class="btn btn-danger del">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <div class="container">
                {{ $gopY->links() }}
            </div> --}}
            {{-- <div class="box-footer clearfix">
                <ul class="pagination no-margin pull-right">
                    {{ $movieType->links() }}
                </ul>
            </div> --}}
        </div>
        <!-- ./col -->
    </div>
@endsection
