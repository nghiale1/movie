@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Tài khoản
@endsection

{{-- set title page --}}
@section('title-page')
    Tài khoản
@endsection

{{-- set title direct --}}
@section('title-direct')
    Tài khoản
@endsection

{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('account.add') }}" class="btn btn-primary">Thêm mới</a>
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
                        <th>Loại tài khoản</th>
                        <th>Họ tên</th>
                        <th>Ngày sinh</th>
                        <th>Số điện thoại</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; ?>
                    @foreach ($user as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->type_acc->type_name }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->birthday }}</td>
                        <td>{{ $item->phone_number }}</td>
                        <td>
                            <a href="{{ route('account.edit', $item->id_user) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <a href="{{ route('account.destroy', $item->id_user) }}" class="btn btn-danger del">Xóa</a>
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
