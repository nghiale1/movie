@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Loại thành viên
@endsection

{{-- set title page --}}
@section('title-page')
    Loại thành viên
@endsection

{{-- set title direct --}}
@section('title-direct')
    Loại thành viên
@endsection

{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('type-member.add') }}" class="btn btn-primary">Thêm mới</a>
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
                        <th>Tên loại thành viên</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; ?>
                    @foreach ($TypeMem as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->typemem_name }}</td>
                        <td>
                            <a href="{{ route('type-member.edit', ['id'=>$item->id_typemem]) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <a href="{{ route('type-member.destroy', ['id'=>$item->id_typemem]) }}" class="btn btn-danger del">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- ./col -->
    </div>
@endsection
