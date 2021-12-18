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
@push('css')
    <style>
        .image{
            width: 150px;
            height: 150px;
        }
    </style>
@endpush
{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    {{-- Nội dung --}}
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <form role="form" method="POST" action="{{ route('article.update',$article->id_artical) }}" enctype="multipart/form-data">
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
                                    <input type="text" value="{{ $article->artical_name }}" name="artical_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea name="content_artical" class="form-control" cols="30" rows="10">{!! $article->content_artical !!}</textarea>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="image_artical">Hình ảnh</label>
                                    <img src="{{asset($article->image_artical)}}" alt="" class="image">
                                    <input type="file" class="form-control" id="image_artical" name="image_artical" value="{{ $article->image_artical }}">
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('article.index') }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
