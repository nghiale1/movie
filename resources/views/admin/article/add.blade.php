@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Tin tức
@endsection

{{-- set title page --}}
@section('title-page')
    Tin tức
@endsection

{{-- set title direct --}}
@section('title-direct')
    Tin tức
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
                    <h3 class="card-title">Thêm tin tức</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="artical_name">Tên chủ đề:</label>
                            <input type="text" class="form-control" id="artical_name" name="artical_name" placeholder="Nhập tên chủ đề">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="content_artical">Nội dung</label>
                            <textarea class="form-control" id="mv_content" name="content_artical" placeholder="Nhập nội dung bài đăng"></textarea>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="image_artical">Hình ảnh</label>
                            <input type="file" class="form-control" id="image_artical" name="image_artical">
                        </div>
                    </div>
                    <input type="hidden" name="id_user" id="" value="{{Auth::id()}}">
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('article.index') }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
