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
            <form role="form" method="POST" action="{{ route('movie-banner.update', $banner) }}" enctype="multipart/form-data">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Chỉnh sửa banner</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Banner của phim</label>
                                    <select class="form-control" name="id_mv">
                                        @foreach ($movie as $item)
                                            <option value="{{ $item->id_mv }}" {{ $banner->banner == $item->id_mv ? 'selected' : '' }}>{{ $item->mv_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Hình ảnh</label><br>
                                    <img src="{{ asset($banner->banner_img)??'' }}" alt="" style="width: 200px;height: 100px;"><br><br>
                                    <input type="file" value="{{ $banner->banner_img }}" id ="banner_img" name="banner_img" class="form-control">
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('movie-banner.index', ['id' => 1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
