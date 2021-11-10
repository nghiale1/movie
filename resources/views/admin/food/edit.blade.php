@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Đồ ăn vặt
@endsection

{{-- set title page --}}
@section('title-page')
    Đồ ăn vặt
@endsection

{{-- set title direct --}}
@section('title-direct')
    Đồ ăn vặt
@endsection

{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    {{-- Nội dung --}}
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <form role="form" method="POST" action="{{ route('food.update', ['id' => $foodDetail->id_food]) }}">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Chỉnh sửa</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Tên món</label>
                                    <input type="text" value="{{ $foodDetail->food_name }}" name="food_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Giá</label>
                                    <input type="text" value="{{ $foodDetail->food_price }}" name="food_price" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="image">Hình ảnh</label>
                                    <input type="file" class="form-control" id="image" name="image" value="{{ $foodDetail->image_food }}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="subdub">Trạng thái:</label>
                                <input type="checkbox" value="0" id="subdub" name="subdub" style="margin-left:15px;">
                                <label>Tạm hết hàng</label>
                                <input type="checkbox" value="1" id="subdub" name="subdub" style="margin-left:10px;">
                                <label>Vẫn còn hàng</label>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('food.index', ['id' => 1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
