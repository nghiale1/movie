@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
Phim
@endsection

{{-- set title page --}}
@section('title-page')
Phim
@endsection

{{-- set title direct --}}
@section('title-direct')
Phim
@endsection
@push('css')
    <style>.card-body {
        padding: 0 1.25rem 0 1.25rem;
    }</style>
@endpush
{{-- set content --}}
@section('content')
{{-- thông báo --}}
@include('admin.common.alert')
{{-- Nội dung --}}
<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <form role="form" method="POST" action="{{ route('movie.update', $movie) }}" enctype="multipart/form-data">
            @csrf
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Chỉnh sửa thông tin phim</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên phim</label>
                            <input type="text" value="{{ $movie->mv_name }}" name="mv_name" class="form-control">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="id_typemv">Loại phim</label>
                            <select class="form-control" name="id_typemv">
                                @foreach($type_movie as $item)
                                <option value="{{ $item->id_typemv }}"
                                    {{ $movie->id_typemv == $item->id_typemv ? 'selected' : '' }}>
                                    {{ $item->typemv_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="id_language">Ngôn ngữ</label>
                            <select class="form-control" name="id_language">
                                @foreach($language as $item)
                                <option value="{{ $item->id_language }}"
                                    {{ $movie->id_language == $item->id_language ? 'selected' : '' }}>
                                    {{ $item->language_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="id_format">Định dạng phim</label>
                            <select class="form-control" name="id_format">
                                @foreach($format as $item)
                                <option value="{{ $item->id_format }}"
                                    {{ $movie->id_format == $item->id_format ? 'selected' : '' }}>
                                    {{ $item->format_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="director">Đạo diễn phim</label>
                            <input type="text" class="form-control" id="director" name="director"
                                value="{{ $movie->director }}">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="perfomer">Diễn viên</label>
                            <input type="text" class="form-control" id="perfomer" name="perfomer"
                                value="{{ $movie->perfomer }}">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="timemv">Thời lượng phim</label>
                            <input type="text" class="form-control" id="timemv" name="timemv"
                                value="{{ $movie->timemv }}">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="mv_content">Nội dung phim</label>
                            <textarea class="form-control" id="mv_content" name="mv_content" rows="6">{{ $movie->mv_content }}</textarea>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="image">Hình ảnh</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="trailer">Trailer</label>
                            <input type="file" class="form-control" id="trailer" name="trailer">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="made_in">Bộ phim của nước</label>
                            <input type="text" class="form-control" id="made_in" name="made_in"
                                value="{{ $movie->made_in }}">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="subdub">Phụ đề/Lồng tiếng:</label>
                            <input type="checkbox" value="0" id="subdub" name="subdub" style="margin-left:15px;"
                                @if($movie->subdub=='0' )checked @endif>
                            <label>Không</label>
                            <input type="checkbox" value="1" id="subdub" name="subdub" style="margin-left:10px;"
                                @if($movie->subdub=='1' )checked @endif>
                            <label>Có</label>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="date_start">Ngày khởi chiếu</label>
                            <input type="date" class="form-control" id="date_start" name="date_start"
                                value="{{ $movie->date_start }}">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="date_end">Ngày kết thúc</label>
                            <input type="date" class="form-control" id="date_end" name="date_end"
                                value="{{ $movie->date_end }}">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <a href="{{ route('movie.index', ['id' => 1]) }}" class="btn btn-default">Quay lại</a>
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
