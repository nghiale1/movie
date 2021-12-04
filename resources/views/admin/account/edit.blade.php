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
                <form role="form" action="{{ route('account.update',$user) }}" method="POST">
                    @csrf
   
                    <div class="card-body">
                        <div class="form-group">
                            <label for="id_type">Loại tài khoản</label>
                            <select class="form-control id_type" name="id_type" required>
                                <option disabled>Chọn loại tài khoản</option>
                                @foreach ($type_acc as $item)
                                  <option value="{{ $item->id_type }}" @if($user->id_type==$item->id_type)
                                    selected
                                @endif> {{ $item->type_name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-body branch_id hide">
                        <div class="form-group">
                            <label for="branch_id">Rạp</label>
                            <select class="form-control" name="branch_id">
                                <option disabled>Chọn rạp</option>
                                @foreach ($branch as $item)
                                  <option value="{{ $item->branch_id }}" @if($user->branch_id==$item->branch_id)
                                    selected
                                @endif> {{ $item->branch_name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="username">Tên tài khoản</label>
                            <input type="username" class="form-control" id="username"  placeholder="Nhập email" value="{{$user->username}}" readonly>
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
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập họ tên" value="{{$user->name}}">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="sex">Giới tính:</label>
                            <input type="radio" value="0" @if($user->sex=='0')
                                checked
                            @endif id="sex" name="sex" style="margin-left:15px;" >
                            <label>Nam</label>
                            <input type="radio" value="1" @if($user->sex=='1')
                            checked
                        @endif id="sex" name="sex" style="margin-left:10px;">
                            <label>Nữ</label>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="birthday">Ngày sinh</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" value="{{date("Y-m-d", strtotime($user->birthday))}}">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="address">Địa chỉ</label>
                            <textarea type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ">{{$user->address}}</textarea>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="phone_number">Số điện thoại</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Nhập số điện thoại" value="{{$user->phone_number}}">
                        </div>
                    </div>

                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="javascript:history.back()" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function () {
            $('.id_type').change(function (e) { 
                e.preventDefault();
                var id_type=$(this).val();
                if (id_type=='2') {
                    $('.branch_id').removeClass('hide');
                } else {
                    $('.branch_id').addClass('hide');
                }
            });
        });
    </script>
@endpush