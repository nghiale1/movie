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
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('food.add') }}" class="btn btn-primary">Thêm mới</a>
        </div>
    </div>
    <br>
    {{-- Nội dung --}}
    <div class="row">
        <div class="col-md-12">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Tên món</th>
                        <th>Hình ảnh</th>
                        <th>Giá</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; ?>
                    @foreach ($food as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->food_name }}</td>
                        <td>{{ $item->image_food }}</td>
                        <td>{{ $item->food_price }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="{{ route('food.edit', ['id'=>$item->id_food]) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <a href="{{ route('food.destroy', ['id'=>$item->id_food]) }}" class="btn btn-danger del">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- ./col -->
    </div>
@endsection
