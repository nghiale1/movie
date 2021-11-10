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
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('article.add') }}" class="btn btn-primary">Thêm mới</a>
        </div>
    </div>
    <br>
    {{-- Nội dung --}}
    <div class="row">
        <div class="col-md-12">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Tên chủ đề</th>
                        <th>Nội dung</th>
                        <th>Hình ảnh</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; ?>
                    @foreach ($article as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->article_name }}</td>
                        <td>{{ $item->content_article }}</td>
                        <td>{{ $item->image_content }}</td>
                        <td>
                            <a href="{{ route('article.edit', ['id'=>$item->id_article]) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <a href="{{ route('article.destroy', ['id'=>$item->id_article]) }}" class="btn btn-danger del">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <div class="container">
                {{ $gopY->links() }}
            </div> --}}
            {{-- <div class="box-footer clearfix">
                <ul class="pagination no-margin pull-right">
                    {{ $movieType->links() }}
                </ul>
            </div> --}}
        </div>
        <!-- ./col -->
    </div>
@endsection
