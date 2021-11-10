@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Định dạng phim
@endsection

{{-- set title page --}}
@section('title-page')
    Định dạng phim
@endsection

{{-- set title direct --}}
@section('title-direct')
    Định dạng phim
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
                    <h3 class="card-title">Thêm định dạng phim</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('format.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="format_name">Tên định dạng</label>
                            <input type="text" class="form-control" id="format_name" name="format_name" placeholder="Nhập tên định dạng">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="price">Phụ thu giá vé</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Nhập giá vé">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('format.index', ['id'=>1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
