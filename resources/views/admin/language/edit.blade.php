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
            <form role="form" method="POST" action="{{ route('language.update', ['id' => $languageDetail->id_language]) }}">
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
                                    <label>Tên ngôn ngữ</label>
                                    <input type="text" value="{{ $languageDetail->language_name }}" name="language_name" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('language.index', ['id' => 1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
