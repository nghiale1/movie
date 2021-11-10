@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Tài khoản
@endsection

{{-- set title page --}}
@section('title-page')
    Tài khoản
@endsection

{{-- set title direct --}}
@section('title-direct')
    Tài khoản
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
                    <h3 class="card-title">Thêm tài khoản</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('account.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">Tên tài khoản</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="id_type">Loại tài khoản</label>
                            <select class="form-control" name="id_typemv">
                                <option>Chọn loại tài khoản</option>
                                @foreach ($type_acc as $item)
                                  <option value="{{ $item->id_type }}"> {{ $item->type_name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="id_typemem">Loại thành viên</label>
                            <select class="form-control" name="id_typemv">
                                <option>Chọn loại thành viên</option>
                                @foreach ($type_member as $item)
                                  <option value="{{ $item->id_typemem }}"> {{ $item->typemem_name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Họ tên</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập họ tên">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="sex">Giới tính:</label>
                            <input type="checkbox" value="0" id="sex" name="sex" style="margin-left:15px;">
                            <label>Nam</label>
                            <input type="checkbox" value="1" id="sex" name="sex" style="margin-left:10px;">
                            <label>Nữ</label>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="birthday">Ngày sinh</label>
                            <input type="date" class="form-control" id="birthday" name="birthday">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="address">Địa chỉ</label>
                            <textarea type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="phone_number">Số điện thoại</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Nhập số điện thoại">
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
