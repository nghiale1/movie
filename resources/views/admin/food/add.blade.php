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
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm món</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('food.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="food_name">Tên món</label>
                            <input type="text" class="form-control" id="food_name" name="food_name" placeholder="Nhập tên món">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="food_price">Giá</label>
                            <input type="number" class="form-control" id="food_price" name="food_price" placeholder="Nhập giá" min="0">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="food_pic">Hình ảnh</label>
                            <input type="file" class="form-control" id="food_pic" name="food_pic">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="status">Trạng thái:</label>
                            <input type="radio" value="0" id="status" name="status" style="margin-left:15px;">
                            <label>Tạm hết hàng</label>
                            <input type="radio" value="1" id="status" name="status" style="margin-left:10px;" checked>
                            <label>Vẫn còn hàng</label>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('food.index', ['id'=>1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
