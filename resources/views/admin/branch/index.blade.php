@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Chi nhánh của rạp
@endsection

{{-- set title page --}}
@section('title-page')
    Chi nhánh của rạp
@endsection

{{-- set title direct --}}
@section('title-direct')
    Chi nhánh của rạp
@endsection

{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('branch.add') }}" class="btn btn-primary">Thêm mới</a>
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
                        <th>Tên chi nhánh</th>
                        <th>Địa chỉ</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; ?>
                    @foreach ($branch as $item)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $item->branch_name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <a href="{{ route('branch.edit', ['id'=>$item->id_branch]) }}" class="btn btn-warning">Chỉnh sửa</a>
                            <a href="{{ route('branch.destroy', ['id'=>$item->id_branch]) }}" class="btn btn-danger del">Xóa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <div class="container">
                {{ $gopY->links() }}
            </div> --}}
            {{-- <div class="box-footer clearfix">
                <ul class="pagination no-margin pull-right">
                    {{ $movieType->links() }}
                </ul>
            </div> --}}
        </div>
        <!-- ./col -->
    </div>
@endsection
