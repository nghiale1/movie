@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Khuyễn mãi cho thành viên
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
            <form role="form" method="POST" action="{{ route('discount.update', ['id' => $DiscountDetail->id_discount]) }}">
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
                                    <input type="text" value="{{ $DiscountDetail->name_discount }}" name="name_discount" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Chi tiết khuyến mãi</label>
                                    <input type="text" value="{{ $DiscountDetail->detail_discount }}" name="detail_discount" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('discount.index', ['id' => 1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
