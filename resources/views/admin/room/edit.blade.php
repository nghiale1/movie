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
            <form role="form" method="POST" action="{{ route('room.update', ['id' => $RoomDetail->id_room]) }}">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Chỉnh sửa</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tên phòng chiếu</label>
                                    <input type="text" value="{{ $RoomDetail->room_name }}" name="room_name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Chi nhánh</label>
                            <select class="form-control" name="id_branch">
                                @foreach ($branch as $item)
                                    <option value="{{ $item->id_branch }}" {{ $room->id_branch == $item->id_branch ? 'selected' : '' }}>{{ $item->branch_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('room.index', ['id' => 1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
