@extends('client.template.master')
@section('header')
    <header class="page-header">
        <div class="container">
            <h1>Chọn hàng ghế</h1>
        </div>
    </header>
@show
@section('content')
    <section class="content-section" data-background="#ffffff">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <div class="movie-info-box">
                        <div class="col-lg-10">
                            <h5>Chọn ghế</h5>
                            <div class="row">
                                @php
                                    $row = 1;
                                @endphp
                                    @foreach ($seatList as $item)

                                        <div class="col-sm-1">
                                            @php
                                                $find = DB::table('detail_ticket_mv')->where('id_seat', $item->id_seat)->count();
                                            @endphp
                                            @if ($find > 0)
                                                <a href="#" disable class="btn btn-danger">{{ $item->seat_name }}</a>
                                            @else
                                                <a href="#" data-id-seat="{{ $item->id_seat }}" class="btn btn-success choseSeat">{{ $item->seat_name }}</a>
                                            @endif
                                        </div>
                                        @if ($item->seat_row > $row)
                                            @php
                                                $row++;
                                            @endphp
                                            <br>
                                        @endif
                                    @endforeach
                                {{-- @endforeach --}}

                            </div>
                        </div>
                        {{-- <div class="col-lg-12">
                            <h5>Rạp</h5>
                            @foreach ($branch as $item)
                                <a href="#" data-branch="{{ $item->id_branch }}" data-movie="{{ $movie->id_mv }}" class="btn btn-warning branch">{{ $item->branch_name }}</a>
                            @endforeach
                        </div> --}}
                        <div class="col-lg-12">
                            <h5>Ghế đã chọn</h5>
                            <div class="timeRoom row">

                            </div>
                            {{-- @foreach ($branch as $item)
                                <a href="" data-idBranch="{{ $item->id_branch }}" class="btn btn-warning branch">{{ $item->branch_name }}</a>
                            @endforeach --}}
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="movie-info-box">
                        <a href="#" class="add-btn">+ MUA VÉ</a>

                        {{-- <div class="rate-box">
                            <a href="#"><i class="lni lni-thumbs-up"></i></a> <a href="#"><i
                                    class="lni lni-thumbs-down"></i></a> <strong>61% liked this film</strong>
                        </div> --}}
                    </div>
                    <!-- end movie-info-box -->
                </div>
                <!-- end col-8 -->
                <div class="col-lg-4">
                    <div class="movie-side-info-box">
                        <figure><img src="{{ asset($movie->image) }}" alt="Image"></figure>
                        <ul>
                            <li><strong>Khởi chiếu: </strong>{{ $movie->date_start }}</li>
                            <li><strong>Đạo diễn:</strong> {{ $movie->director }}</li>
                            <li><strong>Diễn viên:</strong> {{ $movie->perfomer }}</li>
                            <li><strong>Thời lượng:</strong> {{ $movie->timemv }}</li>
                        </ul>
                    </div>
                    <!-- end movie-side-info-box -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end col-12 -->
            <!-- end row -->
            <div class="row">

            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->

    @push('booking')
        <script>
            $(document).ready(function () {
                const base_url = window.location.origin;
                $('.choseSeat').click(function (e) {
                    e.preventDefault();
                    console.log("clicked");
                });
            });
        </script>
    @endpush
@endsection
