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
            <form role="form" method="POST" action="{{ route('type-seat.update', ['id' => $typeSeatDetail->id_typeseat]) }}">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Chỉnh sửa</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tên loại ghế</label>
                                    <input type="text" value="{{ $typeSeatDetail->typeseat_name }}" name="typeseat_name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Phụ thu loại ghế</label>
                                    <input type="text" value="{{ $typeSeatDetail->extra_typeseat }}" name="extra_typeseat" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('type-seat.index', ['id' => 1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
