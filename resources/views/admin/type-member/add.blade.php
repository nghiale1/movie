@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Loại thành viên
@endsection

{{-- set title page --}}
@section('title-page')
    Loại thành viên
@endsection

{{-- set title direct --}}
@section('title-direct')
    Loại thành viên
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
                    <h3 class="card-title">Thêm loại thành viên</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('type-member.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="typemem_name">Tên loại thành viên</label>
                            <input type="text" class="form-control" id="typemem_name" name="typemem_name" placeholder="Nhập tên loại thành viên">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('type-member.index', ['id'=>1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
