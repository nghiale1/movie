@extends('client.template.master')
@section('header')
    <header class="page-header single" data-background="images/movie-poster-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-player">
                        <video src="{{ asset($movie->trailer) }}" poster="images/movie-poster.jpg" controls
                            playsinline></video
                    </div>
                    <!-- end video-player -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end col-12 -->
            <!-- end row -->
        </div>
        <!-- end container -->
    </header>
    <!-- end header -->
@show
@section('content')
    <section class="content-section" data-background="#ffffff">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <div class="movie-info-box">


                        {{-- <div class="rate-box">
                            <a href="#"><i class="lni lni-thumbs-up"></i></a> <a href="#"><i
                                    class="lni lni-thumbs-down"></i></a> <strong>61% liked this film</strong>
                        </div> --}}
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
                <div class="col-lg-12">
                    <h5>Khung giờ</h5>
                    @for ($i = 0; $i < 7; $i++)
                        @php
                            $date = Carbon\Carbon::now();
                        @endphp
                        <a href="" class="btn btn-success">{{ $date->addDays($i)->format("d-m-Y") }}</a>
                    @endfor
                </div>
                <div class="col-lg-12">
                    <h5>Rạp</h5>
                    @foreach ($branch as $item)
                        <a href="#" data-branch="{{ $item->id_branch }}" data-movie="{{ $movie->id_mv }}" class="btn btn-warning branch">{{ $item->branch_name }}</a>
                    @endforeach
                </div>
                <div class="col-lg-12">
                    <h5>Khung giờ</h5>
                    <div class="timeRoom row">

                    </div>
                    {{-- @foreach ($branch as $item)
                        <a href="" data-idBranch="{{ $item->id_branch }}" class="btn btn-warning branch">{{ $item->branch_name }}</a>
                    @endforeach --}}
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->

    @push('booking')
        <script>
            $(document).ready(function () {
                const base_url = window.location.origin;
                $('.branch').click(function (e) {
                    e.preventDefault();
                    console.log($(this).data('branch'));
                    var idBranch = $(this).data('branch');
                    var idMovie = $(this).data('movie');
                    console.log(idMovie);
                    $.ajax({
                        type: "GET",
                        url: base_url+"/get-room/"+idBranch+"/"+idMovie,
                        // data: "data",
                        dataType: "json",
                        success: function (response) {
                            console.log(response);
                            var timeZone = '';
                            for (let index = 0; index < response.length; index++) {
                                const element = response[index];
                                timeZone += '<div class="col-sm-1"><a href="'+base_url+'/chon-ghe/'+response[index].id_st+'" class="btn btn-warning branch" style="margin-right: 5px; margin-bottom: 5px;">'+ response[index].datetime.slice(11,16) +'</a></div>';
                            }

                            $('.timeRoom').append(timeZone);
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
