@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Voucher
@endsection

{{-- set title page --}}
@section('title-page')
    Voucher
@endsection

{{-- set title direct --}}
@section('title-direct')
    Voucher
@endsection

{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('voucher.add') }}" class="btn btn-primary">Thêm mới</a>
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
                        <th>Tên voucher</th>
                        <th>Chi tiết voucher</th>
                        <th>Mã voucher</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày kết thúc</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; ?>
                    @foreach ($voucher as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->voucher_name }}</td>
                        <td>{{ $item->code }}</td>
                        <td>{{ $item->detail_voucher }}</td>
                        <td>{{ $item->date_start }}</td>
                        <td>{{ $item->date_end }}</td>
                        <td>
                            <a href="{{ route('voucher.edit', ['id'=>$item->id_voucher]) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <a href="{{ route('voucher.destroy', ['id'=>$item->id_voucher]) }}" class="btn btn-danger del">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- ./col -->
    </div>
@endsection
