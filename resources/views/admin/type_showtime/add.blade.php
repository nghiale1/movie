@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Loại suất chiếu
@endsection

{{-- set title page --}}
@section('title-page')
    Loại suất chiếu
@endsection

{{-- set title direct --}}
@section('title-direct')
    Loại suất chiếu
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
                    <h3 class="card-title">Thêm loại suất chiếu</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('type_showtime.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="typest_name">Tên loại suất chiếu</label>
                            <input type="text" class="form-control" id="typest_name" name="typest_name" placeholder="Nhập tên loại suất chiếu">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="extra_typest">Phụ thu loại suất chiếu</label>
                            <textarea type="text" class="form-control" id="extra_typest" name="extra_typest" placeholder="Nhập phụ thu loại suất chiếu"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('type_showtime.index', ['id'=>1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
