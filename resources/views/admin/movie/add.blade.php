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
<style>
    .card-body {
        padding: 0 1.25rem 0 1.25rem;
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
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Thêm phim</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="mv_name">Tên phim</label>
                        <input type="text" class="form-control" id="mv_name" name="mv_name" placeholder="Nhập tên phim">
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_typemv">Loại phim</label>
                        <select class="form-control" name="id_typemv">
                            <option>Chọn loại phim</option>
                            @foreach ($type_movie as $item)
                            <option value="{{ $item->id_typemv }}"> {{ $item->typemv_name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_language">Ngôn ngữ</label>
                        <select class="form-control" name="id_language">
                            <option>Chọn ngôn ngữ</option>
                            @foreach ($language as $item)
                            <option value="{{ $item->id_language }}"> {{ $item->language_name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_format">Định dạng phim</label>
                        <select class="form-control" name="id_format">
                            <option>Chọn định dạng phim</option>
                            @foreach ($format as $item)
                            <option value="{{ $item->id_format }}"> {{ $item->format_name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="director">Đạo diễn phim</label>
                        <input type="text" class="form-control" id="director" name="director"
                            placeholder="Nhập tên đạo diễn phim">
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="perfomer">Diễn viên</label>
                        <input type="text" class="form-control" id="perfomer" name="perfomer"
                            placeholder="Nhập tên diễn viên">
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="timemv">Thời lượng phim</label>
                        <input type="text" class="form-control" id="timemv" name="timemv"
                            placeholder="Nhập thời lượng phim">
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="mv_content">Nội dung phim</label>
                        <textarea class="form-control" id="mv_content" name="mv_content"
                            placeholder="Nhập nội dung phim" rows="6"></textarea>
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
                        <input type="text" class="form-control" id="made_in" name="made_in" placeholder="Nhập tên nước">
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="subdub">Phụ đề/Lồng tiếng:</label>
                        <input type="checkbox" value="0" id="subdub" name="subdub" style="margin-left:15px;">
                        <label>Không</label>
                        <input type="checkbox" value="1" id="subdub" name="subdub" style="margin-left:10px;">
                        <label>Có</label>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="date_start">Ngày khởi chiếu</label>
                        <input type="date" class="form-control" id="date_start" name="date_start">
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="date_start">Ngày kết thúc</label>
                        <input type="date" class="form-control" id="date_end" name="date_end">
                    </div>
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                    <a href="{{ route('movie-type.index', ['id'=>1]) }}" class="btn btn-default">Quay lại</a>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection
