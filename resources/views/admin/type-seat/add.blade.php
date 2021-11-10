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
    {{-- Nội dung --}}
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm loại ghế của rạp</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('type-seat.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="typeseat_name">Tên loại ghế</label>
                            <input type="text" class="form-control" id="typeseat_name" name="typeseat_name" placeholder="Nhập tên loại ghế">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="extra_typeseat">Phụ thu loại ghế</label>
                            <input type="text" class="form-control" id="extra_typeseat" name="extra_typeseat" placeholder="Nhập phụ thu loại ghế">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('type-seat.index', ['id'=>1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
