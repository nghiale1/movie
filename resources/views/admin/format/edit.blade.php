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
            <form role="form" method="POST" action="{{ route('format.update', ['id' => $FormatDetail->id_format]) }}">
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
                                    <input type="text" value="{{ $FormatDetail->format_name }}" name="typeName" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Phụ thu giá vé</label>
                                    <input type="text" value="{{ $FormatDetail->price }}" name="price" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('format.index', ['id' => 1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
