@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
Suất chiếu chi nhánh {{Auth::user()->branch->branch_name}}
@endsection

{{-- set title page --}}
@section('title-page')
    Suất chiếu chi nhánh {{Auth::user()->branch->branch_name}}
@endsection

{{-- set title direct --}}
@section('title-direct')
Suất chiếu chi nhánh {{Auth::user()->branch->branch_name}}
@endsection
@push('css')
    <style>
        .form-control{
            width: 20%!important;
            display: inline;
        }
    </style>
@endpush
{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('showtime.add') }}" class="btn btn-primary">Thêm mới</a>
        </div>
    </div>
    <br>
    <form action="" method="get">
        <select name="datetime" id="" class="form-control">
            @foreach ($datetime as $item)
            <option value="{{$item->date}}" @if ($request->datetime==$item->date)
                selected
            @endif>{{date('d-m-Y',strtotime($item->date))}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Tìm</button>
    </form>
    <br>
    {{-- Nội dung --}}
    <div class="row">
        @foreach ($room as $item)
            
        <div class="col-md-6">
            <h4><b>{{$item->room_name}}
                </b></h4>
            <hr>
            <div class="">
                    <table class="table table-light">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Phim</th>
                                <th>Loại suất chiếu</th>
                                <th>Ngày giờ chiếu</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt = 1; ?>
                            @foreach ($item->showtimebyDate($request->datetime) as $item2)
                            <tr>
                                <td>{{ $stt++ }}</td>
                                <td>{{ $item2->movie->mv_name }}</td>
                                <td>{{ $item2->type_showtime->typest_name??'' }}</td>
                                <td>{{ $item2->datetime ??''}}</td>
                                <td>
                                    <a href="{{ route('showtime.edit', $item2) }}" class="btn btn-warning">Chỉnh sửa</a>
                                    <a href="{{ route('showtime.destroy', $item2) }}" class="btn btn-danger del">Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
        @endforeach
        <!-- ./col -->
    </div>
@endsection
