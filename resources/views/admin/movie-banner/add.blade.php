@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Banner
@endsection

{{-- set title page --}}
@section('title-page')
    Banner
@endsection

{{-- set title direct --}}
@section('title-direct')
    Banner
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
                    <h3 class="card-title">Thêm banner</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('movie-banner.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="id_mv">Banner của phim</label>
                            <select class="form-control" name="id_mv">
                                <option>Chọn phim</option>
                                @foreach ($movie as $item)
                                  <option value="{{ $item->id_mv }}"> {{ $item->mv_name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="banner_img">Hình ảnh:</label>
                            <input type="file" class="form-control" id="banner_img" name="banner_img">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('movie-banner.index', ['id'=>1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
