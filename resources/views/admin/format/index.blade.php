@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Định dạng phim
@endsection

{{-- set title page --}}
@section('title-page')
    Định dạng phim
@endsection

{{-- set title direct --}}
@section('title-direct')
    Định dạng phim
@endsection

{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('format.add') }}" class="btn btn-primary">Thêm mới</a>
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
                        <th>Tên định dạng</th>
                        <th>Phụ thu giá vé</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; ?>
                    @foreach ($format as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->format_name }}</td>
                        <td>{{ $item->price ??';'}}</td>
                        <td>
                            <a href="{{ route('format.edit', $item->id_format) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <a href="{{ route('format.destroy', $item->id_format) }}" class="btn btn-danger del">Xóa</a>
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
