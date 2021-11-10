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
            <form role="form" method="POST" action="{{ route('branch.update', ['id' => $branch->id_branch]) }}">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Chỉnh sửa</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Tên khuyến mãi</label>
                                    <input type="text" value="{{ $branch->branch_name }}" name="branch_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Chi tiết khuyến mãi</label>
                                    <input type="text" value="{{ $branch->address }}" name="address" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('branch.index', ['id' => 1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
