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
    {{-- Nội dung --}}
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm khuyến mãi cho thành viên</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('discount.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name_discount">Tên khuyến mãi</label>
                            <input type="text" class="form-control" id="name_discount" name="name_discount" placeholder="Nhập tên khuyến mãi">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="detail_discount">Chi tiết khuyến mãi</label>
                            <input type="text" class="form-control" id="detail_discount" name="detail_discount" placeholder="Nhập phần trăm khuyến mãi">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('discount.index', ['id'=>1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
