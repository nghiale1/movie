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
    {{-- Nội dung --}}
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm voucher</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('voucher.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="voucher_name">Tên voucher</label>
                            <input type="text" class="form-control" id="voucher_name" name="voucher_name" placeholder="Nhập tên voucher">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="code">Mã voucher</label>
                            <input type="text" class="form-control" id="code" name="code" placeholder="Nhập mã voucher">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="detail_voucher">Chi tiết voucher</label>
                            <textarea type="text" class="form-control" id="detail_voucher" name="detail_voucher" placeholder="Nhập chi tiết voucher"></textarea>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="date_start">Ngày bắt đầu</label>
                            <input type="date" class="form-control" id="date_start" name="date_start">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="date_start">Ngày kết thúc</label>
                            <input type="date" class="form-control" id="date_end" name="date_end">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('voucher.index', ['id'=>1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
