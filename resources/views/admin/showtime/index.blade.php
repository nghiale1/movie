@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Suất chiếu cho phim
@endsection

{{-- set title page --}}
@section('title-page')
    Suất chiếu cho phim
@endsection

{{-- set title direct --}}
@section('title-direct')
    Suất chiếu cho phim
@endsection

{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('showtime.add') }}" class="btn btn-primary">Thêm mới</a>
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
                        <th>Chi nhánh</th>
                        <th>Phim</th>
                        <th>Loại suất chiếu</th>
                        <th>Ngày giờ chiếu</th>
                        <th>Đã thêm bởi</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; ?>
                    @foreach ($showtime as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->branch_name }}</td>
                        <td>{{ $item->mv_name }}</td>
                        <td>{{ $item->typest_name }}</td>
                        <td>{{ $item->datetime }}</td>
                        <td>{{ $item->id_user }}</td>
                        <td>
                            <a href="{{ route('showtime.edit', ['id'=>$item->id_showtime]) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <a href="{{ route('showtime.destroy', ['id'=>$item->id_showtime]) }}" class="btn btn-danger del">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- ./col -->
    </div>
@endsection
