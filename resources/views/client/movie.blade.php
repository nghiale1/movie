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
                        <h6>FIND ANYWHERE ELSE</h6>
                        <h2>Phim</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                @foreach ($movie as $item)
                <!-- end col-12 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="{{ asset($item->image) }}" style="width: 180px; height: 266px;" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">{{ $item->timemv }}</small>
                            <ul class="tags">
                                <li>{{ $item->typemv_name }}</li>
                            </ul>

                            {{-- <div class="age">PG13</div> --}}
                            <!-- end age -->
                            <h3 class="name"><a href="{{ route('movie.detail', ['id'=>$item->id_mv]) }}">{{ $item->mv_name }}</a></h3>
                            <p class="tags">Khởi chiếu: {{ $item->date_start }}</p>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                @endforeach
            </div>
        </div>
        <!-- end container -->
    </section>
    {{-- <!-- end content-section -->
    <section class="content-section" data-background="#f9f5f7">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h6>FIND ANYWHERE ELSE</h6>
                        <h2>Movies For You</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies01.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Black Panther</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies02.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Ce Of Entro</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies03.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Coming Soon</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies04.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Handmaiden</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies05.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">The Silence of The Lamps</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies06.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Monospaced</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies07.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Secret Michael's Staff</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies08.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Trolls: World Tour</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies09.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Thrill Crazy</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies10.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Not Out</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies11.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">World of War</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies12.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Love Everywhere</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h6>FIND ANYWHERE ELSE</h6>
                        <h2>Movies For You</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies01.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Black Panther</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies02.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Ce Of Entro</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies03.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Coming Soon</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies04.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Handmaiden</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies05.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">The Silence of The Lamps</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies06.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Monospaced</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies07.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Secret Michael's Staff</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies08.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Trolls: World Tour</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies09.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Thrill Crazy</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies10.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Not Out</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies11.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">World of War</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="video-thumb">
                        <figure class="video-image"> <a href="#"><img src="images/movies12.jpg" alt="Image"></a>
                            <div class="circle-rate">
                                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none"
                                        cx="15" cy="15" r="14"></circle>
                                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                        stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                </svg>
                                <b>5.7</b>
                            </div>
                            <!-- end circle-rate -->
                            <div class="hd">1080 <b>HD</b></div>
                            <!-- end hd -->
                        </figure>
                        <div class="video-content"> <small class="range">190 min,</small>
                            <ul class="tags">
                                <li>Romance</li>
                            </ul>
                            <div class="age">PG13</div>
                            <!-- end age -->
                            <h3 class="name"><a href="movie-single.html">Love Everywhere</a></h3>
                        </div>
                        <!-- end video-content -->
                    </div>
                    <!-- end video-thumb -->
                </div>
                <!-- end col-2 -->
            </div>
        </div>
        <!-- end container -->
    </section> --}}
@endsection
