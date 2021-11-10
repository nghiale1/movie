@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Ngôn ngữ phim
@endsection

{{-- set title page --}}
@section('title-page')
    Ngôn ngữ phim
@endsection

{{-- set title direct --}}
@section('title-direct')
    Ngôn ngữ phim
@endsection

{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('language.add') }}" class="btn btn-primary">Thêm mới</a>
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
                        <th>Tên ngôn ngữ</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; ?>
                    @foreach ($language as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->language_name }}</td>
                        <td>
                            <a href="{{ route('language.edit', ['id'=>$item->id_language]) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <a href="{{ route('language.destroy', ['id'=>$item->id_language]) }}" class="btn btn-danger del">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- ./col -->
    </div>
@endsection
