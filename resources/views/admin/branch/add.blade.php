@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Chi nhánh của rạp
@endsection

{{-- set title page --}}
@section('title-page')
    Chi nhánh của rạp
@endsection

{{-- set title direct --}}
@section('title-direct')
    Chi nhánh của rạp
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
                    <h3 class="card-title">Thêm chi nhánh</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('branch.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="branch_name">Tên chi nhánh</label>
                            <input type="text" class="form-control" id="branch_name" name="branch_name" placeholder="Nhập tên chi nhánh">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="address">Địa chỉ</label>
                            <textarea type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('branch.index', ['id'=>1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
