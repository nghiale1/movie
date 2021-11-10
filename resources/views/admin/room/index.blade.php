@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Phòng chiếu
@endsection

{{-- set title page --}}
@section('title-page')
    Phòng chiếu
@endsection

{{-- set title direct --}}
@section('title-direct')
    Phòng chiếu
@endsection

{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('room.add') }}" class="btn btn-primary">Thêm phòng</a>
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
                        <th>Tên phòng</th>
                        <th>Chi nhánh</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; ?>
                    @foreach ($room as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->room_name }}</td>
                        <td>{{ $item->branch_name }}</td>
                        <td>
                            <a href="{{ route('room.edit', ['id'=>$item->id_room]) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <a href="{{ route('room.destroy', ['id'=>$item->id_room]) }}" class="btn btn-danger del">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- ./col -->
    </div>
@endsection
