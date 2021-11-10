@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Loại ghế của rạp
@endsection

{{-- set title page --}}
@section('title-page')
    Loại ghế của rạp
@endsection

{{-- set title direct --}}
@section('title-direct')
    Loại ghế của rạp
@endsection

{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('type-seat.add') }}" class="btn btn-primary">Thêm mới loại ghế</a>
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
                        <th>Tên loại ghế</th>
                        <th>Phụ thu loại ghế</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; ?>
                    @foreach ($type_seat as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->typeseat_name }}</td>
                        <td>{{ $item->extra_typeseat }}</td>
                        <td>
                            <a href="{{ route('type-seat.edit', ['id'=>$item->id_typeseat]) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <a href="{{ route('type-seat.destroy', ['id'=>$item->id_typeseat]) }}" class="btn btn-danger del">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- ./col -->
    </div>
@endsection
