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
                <form role="form" action="{{ route('article.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="article_name">Tên chủ đề:</label>
                            <input type="text" class="form-control" id="article_name" name="article_name" placeholder="Nhập tên chủ đề">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="content_article">Nội dung</label>
                            <textarea class="form-control" id="mv_content" name="content_article" placeholder="Nhập nội dung bài đăng"></textarea>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="image_article">Hình ảnh</label>
                            <input type="file" class="form-control" id="image_article" name="image_article">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('article.index', ['id'=>1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
