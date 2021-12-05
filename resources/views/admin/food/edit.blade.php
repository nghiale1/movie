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
@push('css')
    <style>
        .image{
            width: 150px;
            height: 150px;
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
            <form role="form" method="POST" action="{{ route('food.update',  $food->id_food) }}" enctype="multipart/form-data">
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
                                    <input type="text" value="{{ $food->food_name }}" name="food_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Giá</label>
                                    <input type="number" value="{{ $food->food_price }}" name="food_price" class="form-control" min="0">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="food_pic">Hình ảnh</label>
                            <img src="{{asset($food->food_pic)}}" alt="" class="image">
                                    <input type="file" class="form-control" id="food_pic" name="food_pic" value="{{ $food->food_pic }}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="status">Trạng thái:</label>
                                <input type="radio" value="0" id="status" name="status" style="margin-left:15px;" @if ($food->status==0)
                                checked
                                @endif>
                                <label>Tạm hết hàng</label>
                                <input type="radio" value="1" id="status" name="status" style="margin-left:10px;" @if ($food->status==1)
                                checked
                                @endif>
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
