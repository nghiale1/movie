@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Loại phim
@endsection

{{-- set title page --}}
@section('title-page')
    Loại phim
@endsection

{{-- set title direct --}}
@section('title-direct')
    Loại phim
@endsection

{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('movie-type.add') }}" class="btn btn-primary">Thêm mới</a>
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
                        <th>Tên loại</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; ?>
                    @foreach ($movieType as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->typemv_name }}</td>
                        <td>
                            <a href="{{ route('movie-type.edit', ['id'=>$item->id_typemv]) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <a href="{{ route('movie-type.destroy', ['id'=>$item->id_typemv]) }}" class="btn btn-danger del">Xóa</a>
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
