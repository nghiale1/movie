@extends('client.template.master')
@section('header')
    <header class="page-header single" data-background="images/movie-poster-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-player">
                        <video src="{{ asset($movie->trailer) }}" poster="images/movie-poster.jpg" controls
                            playsinline></video </div>
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
                        <h2 class="name">{{ $movie->mv_name }}
                        </h2>
                        <ul class="features">
                            <li>
                                <div class="rate">
                                    {{-- <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40"
                                        fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="circle-chart__background" stroke="#eee" stroke-width="2" fill="none"
                                            cx="15" cy="15" r="14"></circle>
                                        <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                            stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                    </svg> --}}
                                    {{ $movie->made_in }}
                                </div>
                                <!-- end rate -->
                            </li>
                            <li>
                                <div class="year">2020</div>
                            </li>
                            <li>
                                <div class="hd">1080 <b>HD</b></div>
                            </li>
                            <li>
                                <div class="tags">{{ $movie->typemv_name }}</div>
                            </li>
                        </ul>
                        <p class="description">{{ $movie->mv_content }}</p>
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
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
@endsection
