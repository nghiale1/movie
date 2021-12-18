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
            <form role="form" method="POST" action="{{ route('format.update', $format->id_format) }}">
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
                                    <label>Tên định dạng</label>
                                    <input type="text" value="{{ $format->format_name }}" name="format_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Phụ thu giá vé</label>
                                    <input type="number" value="{{ $format->price??0 }}" name="price" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('format.index') }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
