@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
Phim
@endsection

{{-- set title page --}}
@section('title-page')
Phim
@endsection
@push('css')
    <style>
        .img{
            width: 100px;
            height: 100px;
        }
    </style>
@endpush

{{-- set title direct --}}
@section('title-direct')
Phim
@endsection

{{-- set content --}}
@section('content')
{{-- thông báo --}}
@include('admin.common.alert')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('movie.add') }}" class="btn btn-primary">Thêm mới</a>
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
                    <th>Tên phim</th>
                    <th>Hình ảnh</th>
                    <th>Ngày bắt đầu chiếu</th>
                    <th>Ngày kết thúc chiếu</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php $stt = 1; ?>
                @foreach ($movie as $item)
                <tr>
                    <td>{{ $stt++ }}</td>
                    <td>{{ $item->mv_name }}</td>
                    <td>
                        <img src="{{asset($item->image??'')}}" alt="" class="img">
                    </td>
                    <td>{{ $item->date_start }}</td>
                    <td>{{ $item->date_end }}</td>
                    <td>
                        <a href="{{ route('movie.edit', $item->id_mv) }}" class="btn btn-warning">Chỉnh sửa</a>
                        <a href="{{ route('movie.destroy',$item->id_mv) }}" class="btn btn-danger del">Xóa</a>
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
