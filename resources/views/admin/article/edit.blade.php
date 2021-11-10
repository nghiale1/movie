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
            <form role="form" method="POST" action="{{ route('article.update', ['id' => $articleDetail->id_article]) }}">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Chỉnh sửa tin tức</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tên chủ đề</label>
                                    <input type="text" value="{{ $articleDetail->article_name }}" name="article_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea type="text" value="{{ $articleDetail->content_article }}" name="content_article" class="form-control">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="image_article">Hình ảnh</label>
                                    <input type="file" class="form-control" id="image_article" name="image_article" value="{{ $articleDetail->image_article }}">
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('type-acc.index', ['id' => 1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
