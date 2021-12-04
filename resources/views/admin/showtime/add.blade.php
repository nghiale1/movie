@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Suất chiếu của phim
@endsection

{{-- set title page --}}
@section('title-page')
    Suất chiếu của phim
@endsection

{{-- set title direct --}}
@section('title-direct')
    Suất chiếu của phim
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
                    <h3 class="card-title">Thêm suất chiếu cho phim</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('showtime.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="id_mv">Phim: </label>
                            <select class="form-control" name="id_mv">
                                <option>Chọn loại suất chiếu</option>
                                @foreach ($movie as $item)
                                  <option value="{{ $item->id_mv }}"> {{ $item->mv_name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_typest">Loại suất chiếu: </label>
                            <select class="form-control" name="id_typest">
                                <option>Chọn loại suất chiếu</option>
                                @foreach ($type_showtime as $item)
                                  <option value="{{ $item->id_typest }}"> {{ $item->typest_name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="id_branch" value="{{$branch->id_branch}}">
                        <div class="form-group">
                            <label for="id_room">Phòng chiếu: </label>
                            <select class="form-control" name="id_room">
                                <option>Chọn phòng</option>
                                @foreach ($room as $item)
                                  <option value="{{ $item->id_room }}"> {{ $item->room_name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="datetime">Ngày và giờ chiếu:</label>
                            <input type="datetime-local" class="form-control" id="datetime" name="datetime">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('showtime.index', ['id'=>1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
