@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Ngôn ngữ phim
@endsection

{{-- set title page --}}
@section('title-page')
    Ngôn ngữ phim
@endsection

{{-- set title direct --}}
@section('title-direct')
    Ngôn ngữ phim
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
                    <h3 class="card-title">Thêm ngôn ngữ</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('language.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="language_name">Tên ngôn ngữ</label>
                            <input type="text" class="form-control" id="language_name" name="language_name" placeholder="Nhập tên ngôn ngữ">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('language.index', ['id'=>1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
