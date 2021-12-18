@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Loại tài khoản
@endsection

{{-- set title page --}}
@section('title-page')
    Loại tài khoản
@endsection

{{-- set title direct --}}
@section('title-direct')
    Loại tài khoản
@endsection

{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('type-acc.add') }}" class="btn btn-primary">Thêm mới loại tài khoản</a>
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
                    @foreach ($typeAcc as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->type_name }}</td>
                        <td>
                            <a href="{{ route('type-acc.edit', $item->id_type) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <a href="{{ route('type-acc.destroy', $item->id_type) }}" class="btn btn-danger del">Xóa</a>
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
