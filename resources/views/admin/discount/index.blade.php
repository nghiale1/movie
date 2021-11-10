@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Khuyến mãi cho thành viên
@endsection

{{-- set title page --}}
@section('title-page')
    Khuyến mãi cho thành viên
@endsection

{{-- set title direct --}}
@section('title-direct')
    Khuyến mãi cho thành viên
@endsection

{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('discount.add') }}" class="btn btn-primary">Thêm mới</a>
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
                        <th>Tên khuyến mãi</th>
                        <th>Chi tiết khuyến mãi</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; ?>
                    @foreach ($discount as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->name_discount }}</td>
                        <td>{{ $item->detail_discount }}</td>
                        <td>
                            <a href="{{ route('discount.edit', ['id'=>$item->id_discount]) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <a href="{{ route('discount.destroy', ['id'=>$item->id_discount]) }}" class="btn btn-danger del">Xóa</a>
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
