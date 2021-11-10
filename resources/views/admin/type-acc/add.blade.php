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
    {{-- Nội dung --}}
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm loại tài khoản</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('type-acc.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="type_name">Tên loại tài khoản</label>
                            <input type="text" class="form-control" id="type_name" name="type_name" placeholder="Nhập tên loại tài khoản">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('type-acc.index', ['id'=>1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
