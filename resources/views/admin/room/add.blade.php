@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Phòng chiếu
@endsection

{{-- set title page --}}
@section('title-page')
    Phòng chiếu
@endsection

{{-- set title direct --}}
@section('title-direct')
    Phòng chiếu
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
                    <h3 class="card-title">Thêm phòng chiếu</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('room.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="room_name">Tên phòng chiếu</label>
                            <input type="text" class="form-control" id="room_name" name="room_name" placeholder="Nhập tên phòng chiếu">
                        </div>
                        <div class="form-group">
                            <label for="id_branch">Chi nhánh</label>
                            <select class="form-control" name="id_branch">
                                <option>Chọn chi nhánh</option>
                                @foreach ($branch as $item)
                                  <option value="{{ $item->id_branch }}"> {{ $item->branch_name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('room.index', ['id'=>1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
