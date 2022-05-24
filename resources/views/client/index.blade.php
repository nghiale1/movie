@extends('client.template.master')
@section('header')
    <header class="slider">
        <div class="main-slider">
            <div class="swiper-wrapper">
                @foreach ($banner as $key => $item)
                    <div class="swiper-slide">
                        <div class="slide-inner @if ($key != 0) bg-image @endif"
                            data-background="{{ asset($item->banner_img) }}">
                            <div class="container" data-swiper-parallax="200">
                                <h6 class="tagline">Giới thiệu</h6>
                                <h2 class="name">Phim mới</h2>
                                <ul class="features">
                                    <li>
                                        <div class="rate">
                                            <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2"
                                                    fill="none" cx="15" cy="15" r="14"></circle>
                                                <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                                    stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                            </svg>
                                        </div>
                                        <!-- end rate -->
                                    </li>
                                    <li>
                                        <div class="year">2022</div>
                                    </li>
                                    <li>
                                        <div class="hd">4K <b>ULTRA HD</b></div>
                                    </li>
                                    <li>
                                        <div class="tags">Phim mới hấp dẫn</div>
                                    </li>
                                </ul>
                                {{-- <a href="#" class="play-btn">WATCH TRAILER</a> <a href="account.html" class="add-btn">+</a> </div> --}}
                                <!-- end container -->
                            </div>
                            <!-- end slide-inner -->
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- end swiper-wrapper -->
            <div class="swiper-pagination"></div>
            <!-- end swiper-pagination -->
        </div>
        <!-- end main-slider -->
    </header>
@show
@section('content')
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h6>Mới chiếu</h6>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                @foreach ($movieNew as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="category-thumb">
                            <figure class="category-image"> <img src="{{ asset($item->image) }}" alt="Image"> </figure>
                            <div class="category-content">
                                <h3 class="name">{{ $item->mv_name }}</h3>
                                <div class="play-btn"><a
                                        href="{{ route('movie.detail', ['id' => $item->id_mv]) }}">+</a></div>
                            </div>
                            <!-- end category-content -->
                        </div>
                        <!-- end category-thumb -->
                    </div>
                    <!-- end col-3 -->
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    @if ($post != null)
        <section class="content-section no-top-spacing">
            <div class="container">
                <div class="row align-items-center no-gutters">
                    <div class="col-lg-6">
                        <figure class="side-image full-left"> <img src="{{ asset($post->image_artical) }}" alt="Image">
                        </figure>
                        <!-- end side-image -->
                    </div>
                    <!-- end col-6 -->
                    <div class="col-lg-6">
                        <div class="side-content right">
                            <h2>{{ $post->artical_name }}</h2>
                            <ul class="icon-list">
                                <li>
                                    <figure> <img src="{{ asset('client/images/icon01.png') }}" alt="Image"> </figure>
                                    <div class="content">
                                        <h4>Access while traveling</h4>
                                        <p>{{ $post->content_artical }}</p>
                                    </div>
                                </li>
                                <li>
                                    <figure> <img src="{{ asset('client/images/icon02.png') }}" alt="Image"> </figure>
                                    <div class="content">
                                        <h4>Stream with no interruptions</h4>
                                        <p>Pause for snacks, not buffering. Stream smoothly with
                                            our <u>lightning-fast NordLynx</u> protocol network.</p>
                                    </div>
                                </li>
                                <li>
                                    <figure> <img src="{{ asset('client/images/icon03.png') }}" alt="Image"> </figure>
                                    <div class="content">
                                        <h4>Stay secure at all times</h4>
                                        <p>Securely access and enjoy your favorite content,
                                            even on public Wi-Fi. Your connection</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end side-content -->
                    </div>
                    <!-- end col-6 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end content-section -->
    @endif
    <section class="content-section" data-background="#111111">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center light">
                        <h2>Phim cho bạn</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                @foreach ($movieForYou as $item)
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="video-thumb light">
                            <figure class="video-image"> <a
                                    href="{{ route('movie.detail', ['id' => $item->id_mv]) }}"><img
                                        src="{{ asset($item->image) }}" alt="Image"></a>
                                <div class="circle-rate">
                                    <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2"
                                            fill="none" cx="15" cy="15" r="14"></circle>
                                        <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                            stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                    </svg>
                                    <b>5.7</b>
                                </div>
                                <!-- end circle-rate -->
                                <div class="hd">1080 <b>HD</b></div>
                                <!-- end hd -->
                            </figure>
                            <div class="video-content">
                                <ul class="tags">
                                </ul>
                                <!-- end age -->
                                <h3 class="name"><a
                                        href="{{ route('movie.detail', ['id' => $item->id_mv]) }}">{{ $item->mv_name }}</a>
                                </h3>
                            </div>
                            <!-- end video-content -->
                        </div>
                        <!-- end video-thumb -->
                    </div>
                    <!-- end col-2 -->
                @endforeach
                <div class="col-12 text-center"> <a href="{{ route('movie.list', ['id' => 1]) }}"
                        class="custom-button">Xem thêm</a> </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section">
        <div class="video-bg">
            <video src="{{ asset('client/videos/video01.mp4') }}" autoplay muted playsinline loop></video>
        </div>
        <!-- end video-bg -->
    </section>
    <!-- end content-section -->

@endsection
