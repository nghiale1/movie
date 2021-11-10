@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Banner
@endsection

{{-- set title page --}}
@section('title-page')
    Banner
@endsection

{{-- set title direct --}}
@section('title-direct')
    Banner
@endsection

{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('movie-banner.add') }}" class="btn btn-primary">Thêm mới</a>
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
                        <th>Banner của phim</th>
                        <th>Hình ảnh</th>
                        <th>Đã thêm bởi</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; ?>
                    @foreach ($banner as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->mv_name }}</td>
                        <td>{{ $item->banner_img }}</td>
                        <td>{{ $item->id_user }}</td>
                        <td>
                            <a href="{{ route('movie-banner.edit', ['id'=>$item->id_banner]) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <a href="{{ route('movie-banner.destroy', ['id'=>$item->id_banner]) }}" class="btn btn-danger del">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- ./col -->
    </div>
@endsection
