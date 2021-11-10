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
            <form role="form" method="POST" action="{{ route('voucher.update', ['id' => $voucherDetail->id_voucher]) }}">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Chỉnh sửa</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @csrf
                        <class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tên loại voucher</label>
                                    <input type="text" value="{{ $voucherDetail->voucher_name }}" name="typemem_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Mã voucher</label>
                                    <input type="text" value="{{ $voucherDetail->code }}" name="code" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Chi tiết voucher</label>
                                    <textarea type="text" value="{{ $voucherDetail->detail_voucher }}" name="detail_voucher" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="date_start">Ngày bắt đầu</label>
                                    <input type="date" class="form-control" id="date_start" name="date_start" value="{{ $voucherDetail->date_start }}">
                                </div>
                                <div class="form-group">
                                    <label for="date_start">Ngày kết thúc</label>
                                    <input type="date" class="form-control" id="date_end" name="date_end" value="{{ $voucherDetail->date_end }}">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('type-member.index', ['id' => 1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
