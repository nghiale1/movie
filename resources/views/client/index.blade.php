@extends('client.template.master')
@section('header')
<header class="slider">
    <div class="main-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slide-inner" data-background="{{asset('/client/images/slide01.jpg')}}">
            <div class="container" data-swiper-parallax="200">
              <h6 class="tagline">NEW RELEASES</h6>
              <h2 class="name">The Rise of<br>
                <strong>Football</strong></h2>
              <ul class="features">
                <li>
                  <div class="rate">
                    <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                      <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                      <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                    </svg>
                    <b>5.4</b> IMDB SCORE </div>
                  <!-- end rate -->
                </li>
                <li>
                  <div class="year">2020</div>
                </li>
                <li>
                  <div class="hd">4K <b>ULTRA HD</b></div>
                </li>
                <li>
                  <div class="tags">Romance, Action</div>
                </li>
              </ul>
              <p class="description">
                  'The Football' follows Dee Dee Allen and Barry Glickman <br>who are New York City stage stars.
                  </p>
              <a href="movie-single.html" class="play-btn">WATCH TRAILER</a> <a href="account.html" class="add-btn">+</a> </div>
            <!-- end container -->
          </div>
          <!-- end slide-inner -->
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <div class="slide-inner bg-image" data-background="{{asset('/client/images/slide02.jpg')}}">
            <div class="container" data-swiper-parallax="200">
              <h6 class="tagline">NEW RELEASES</h6>
              <h2 class="name">The History of <br>
                <strong>Ottomans</strong></h2>
              <ul class="features">
                <li>
                  <div class="rate">
                    <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                      <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                      <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                    </svg>
                    <b>5.4</b> IMDB SCORE </div>
                  <!-- end rate -->
                </li>
                <li>
                  <div class="year">2020</div>
                </li>
                <li>
                  <div class="hd">1080 <b>HD</b></div>
                </li>
                <li>
                  <div class="tags">Romance, Action</div>
                </li>
              </ul>
              <p class="description">From attending the prom with her girlfriend, Alyssa<br>
   When Dee Dee and Barry decide that Emma's </p>
              <a href="movie-single.html" class="play-btn">PLAY MOVIE</a> <a href="account.html" class="add-btn">+</a> </div>
            <!-- end container -->
          </div>
          <!-- end slide-inner -->
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <div class="slide-inner bg-image" data-background="{{asset('/client/images/slide03.jpg')}}">
            <div class="container" data-swiper-parallax="200">
              <h6 class="tagline">NEW RELEASES</h6>
              <h2 class="name">La Guerra de<br>
                <strong>Mandou</strong></h2>
              <ul class="features">
                <li>
                  <div class="rate">
                    <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                      <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                      <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                    </svg>
                    <b>5.4</b> IMDB SCORE </div>
                  <!-- end rate -->
                </li>
                <li>
                  <div class="year">2020</div>
                </li>
                <li>
                  <div class="hd">720P <b>HD</b></div>
                </li>
                <li>
                  <div class="tags">Romance, Action</div>
                </li>
              </ul>
              <p class="description">She can truly celebrate who she is. Directed by Ryan Murphy<br>'The Mandou' is the spectacular, big-hearted film.
                  </p>
              <a href="movie-single.html" class="play-btn">PLAY TRAILER</a> <a href="account.html" class="add-btn">+</a> </div>
            <!-- end container -->
          </div>
          <!-- end slide-inner -->
        </div>
        <!-- end swiper-slide -->
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
            <h6>ONLINE STREAMING</h6>
            <h2>Watch Shows Online</h2>
          </div>
          <!-- end section-title -->
        </div>
        <!-- end col-12 -->
        <div class="col-lg-3 col-sm-6">
          <div class="category-thumb">
            <figure class="category-image"> <img src="images/serial-category01.jpg" alt="Image"> </figure>
            <div class="category-content">
              <ul class="tags">
                <li>Romance</li>
                <li>Drama</li>
              </ul>
              <h3 class="name">Thinking You</h3>
              <div class="play-btn"><a href="movie-single.html">+</a></div>
              <small class="details">SEASON 1 <span>-</span> 2020</small> </div>
            <!-- end category-content -->
          </div>
          <!-- end category-thumb -->
        </div>
        <!-- end col-3 -->

        <div class="col-lg-3 col-sm-6">
          <div class="category-thumb">
            <figure class="category-image"> <img src="images/serial-category02.jpg" alt="Image"> </figure>
            <div class="category-content">
              <ul class="tags">
                <li>Action</li>
              </ul>
              <h3 class="name">Civil War</h3>
              <div class="play-btn"><a href="movie-single.html">+</a></div>
              <small class="details">SEASON 2 <span>-</span> 2020</small> </div>
            <!-- end category-content -->
          </div>
          <!-- end category-thumb -->
        </div>
        <!-- end col-3 -->
        <div class="col-lg-3 col-sm-6">
          <div class="category-thumb">
            <figure class="category-image"> <img src="images/serial-category03.jpg" alt="Image"> </figure>
            <div class="category-content">
              <ul class="tags">
                <li>Romance</li>
              </ul>
              <h3 class="name">Best Game</h3>
              <div class="play-btn"><a href="movie-single.html">+</a></div>
              <small class="details">SEASON 5 <span>-</span> 2020</small> </div>
            <!-- end category-content -->
          </div>
          <!-- end category-thumb -->
        </div>
        <!-- end col-3 -->
        <div class="col-lg-3 col-sm-6">
          <div class="category-thumb">
            <figure class="category-image"> <img src="images/serial-category04.jpg" alt="Image"> </figure>
            <div class="category-content">
              <ul class="tags">
                <li>Romance</li>
                <li>Action</li>
              </ul>
              <h3 class="name">Antoshka</h3>
              <div class="play-btn"><a href="movie-single.html">+</a></div>
              <small class="details">SEASON 8 <span>-</span> 2020</small> </div>
            <!-- end category-content -->
          </div>
          <!-- end category-thumb -->
        </div>
        <!-- end col-3 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
  <section class="content-section no-top-spacing">
    <div class="container">
      <div class="row align-items-center no-gutters">
        <div class="col-lg-6">
          <figure class="side-image full-left"> <img src="images/side-image01.png" alt="Image"> </figure>
          <!-- end side-image -->
        </div>
        <!-- end col-6 -->
        <div class="col-lg-6">
          <div class="side-content right">
            <h2>Best pick for hassle-free <u>streaming</u> experience.</h2>
            <ul class="icon-list">
              <li>
                <figure> <img src="images/icon01.png" alt="Image"> </figure>
                <div class="content">
                  <h4>Access while traveling</h4>
                  <p>Keep access to your entertainment content while
                    roaming the world.Pick from thousands.</p>
                </div>
              </li>
              <li>
                <figure> <img src="images/icon02.png" alt="Image"> </figure>
                <div class="content">
                  <h4>Stream with no interruptions</h4>
                  <p>Pause for snacks, not buffering. Stream smoothly with
                    our <u>lightning-fast NordLynx</u> protocol network.</p>
                </div>
              </li>
              <li>
                <figure> <img src="images/icon03.png" alt="Image"> </figure>
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
  <section class="content-section" data-background="#111111">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center light">
            <h6>FIND ANYWHERE ELSE</h6>
            <h2>Movies For You</h2>
          </div>
          <!-- end section-title -->
        </div>
        <!-- end col-12 -->
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
          <div class="video-thumb light">
            <figure class="video-image"> <a href="#"><img src="images/movies01.jpg" alt="Image"></a>
              <div class="circle-rate">
                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                  <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                </svg>
                <b>5.7</b> </div>
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
          <div class="video-thumb light">
            <figure class="video-image"> <a href="#"><img src="images/movies02.jpg" alt="Image"></a>
              <div class="circle-rate">
                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                  <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                </svg>
                <b>5.7</b> </div>
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
          <div class="video-thumb light">
            <figure class="video-image"> <a href="#"><img src="images/movies03.jpg" alt="Image"></a>
              <div class="circle-rate">
                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                  <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                </svg>
                <b>5.7</b> </div>
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
          <div class="video-thumb light">
            <figure class="video-image"> <a href="#"><img src="images/movies04.jpg" alt="Image"></a>
              <div class="circle-rate">
                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                  <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                </svg>
                <b>5.7</b> </div>
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
          <div class="video-thumb light">
            <figure class="video-image"> <a href="#"><img src="images/movies05.jpg" alt="Image"></a>
              <div class="circle-rate">
                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                  <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                </svg>
                <b>5.7</b> </div>
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
          <div class="video-thumb light">
            <figure class="video-image"> <a href="#"><img src="images/movies06.jpg" alt="Image"></a>
              <div class="circle-rate">
                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                  <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                </svg>
                <b>5.7</b> </div>
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
          <div class="video-thumb light">
            <figure class="video-image"> <a href="#"><img src="images/movies07.jpg" alt="Image"></a>
              <div class="circle-rate">
                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                  <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                </svg>
                <b>5.7</b> </div>
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
          <div class="video-thumb light">
            <figure class="video-image"> <a href="#"><img src="images/movies08.jpg" alt="Image"></a>
              <div class="circle-rate">
                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                  <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                </svg>
                <b>5.7</b> </div>
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
          <div class="video-thumb light">
            <figure class="video-image"> <a href="#"><img src="images/movies09.jpg" alt="Image"></a>
              <div class="circle-rate">
                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                  <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                </svg>
                <b>5.7</b> </div>
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
          <div class="video-thumb light">
            <figure class="video-image"> <a href="#"><img src="images/movies10.jpg" alt="Image"></a>
              <div class="circle-rate">
                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                  <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                </svg>
                <b>5.7</b> </div>
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
          <div class="video-thumb light">
            <figure class="video-image"> <a href="#"><img src="images/movies11.jpg" alt="Image"></a>
              <div class="circle-rate">
                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                  <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                </svg>
                <b>5.7</b> </div>
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
          <div class="video-thumb light">
            <figure class="video-image"> <a href="#"><img src="images/movies12.jpg" alt="Image"></a>
              <div class="circle-rate">
                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                  <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                </svg>
                <b>5.7</b> </div>
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
        <div class="col-12 text-center"> <a href="#" class="custom-button">BROWSE ALL MOVIES</a> </div>
        <!-- end col-12 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
  <section class="content-section" data-background="images/section-pattern01.png">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="testimonial">
            <h2>Trusted by tech experts
              and real users </h2>
            <blockquote>“As VPN services go, it's hard to beat NordVPN. It
              has a large and diverse collection of servers, an
              excellent collection of advanced features, strong
              privacy and security ”</blockquote>
            <figure> <img src="images/avatar01.jpg" alt="Image"> <img src="images/brand01.jpg" alt="Image"> </figure>
            <h6>Max Eddy <br>
              <small>Software analyst, PCMag</small> </h6>
          </div>
          <!-- end testimonial -->
        </div>
        <!-- end col-7 -->
        <div class="col-lg-5">
          <figure class="side-image"> <img src="images/side-image02.png" alt="Image"> </figure>
          <!-- end side-image -->
        </div>
        <!-- end col-5 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
  <section class="content-section">
    <div class="video-bg">
      <video src="videos/video01.mp4" autoplay muted playsinline loop></video>
    </div>
    <!-- end video-bg -->
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center light">
            <h6>START SECURE BROWSING</h6>
            <h2>Ready to Grab the deal?</h2>
          </div>
          <!-- end section-title -->
        </div>
        <!-- end col-12 -->
      </div>
      <!-- end row -->
      <div class="row">
        <div class="col-lg-4">
          <div class="price-box">
            <figure class="icon"><img src="images/icon04.png" alt="Image"></figure>
            <div class="months">1-month plan</div>
            <div class="price"><span>$</span> <b>9.99</b> <small>per month</small> </div>
            <a href="#">GET THE DEAL</a>
            <div class="guarantee"><i class="lni lni-protection"></i> 30-days money-back guarantee</div>
          </div>
          <!-- end price-box -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4">
          <div class="price-box">
            <figure class="icon"><img src="images/icon05.png" alt="Image"></figure>
            <div class="months">12-months plan</div>
            <div class="price"><span>$</span> <b>3.99</b> <small>per month</small> </div>
            <div class="save">Save 68%</div>
            <div class="note"><u>$286.80</u>  $89.00 for the first 2 years</div>
            <a href="#">GET THE DEAL</a>
            <div class="guarantee"><i class="lni lni-protection"></i> 30-days money-back guarantee</div>
          </div>
          <!-- end price-box -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4">
          <div class="price-box">
            <figure class="icon"><img src="images/icon06.png" alt="Image"></figure>
            <div class="months">6-months plan</div>
            <div class="price"><span>$</span> <b>6.99</b> <small>per month</small> </div>
            <a href="#">GET THE DEAL</a>
            <div class="guarantee"><i class="lni lni-protection"></i> 30-days money-back guarantee</div>
          </div>
          <!-- end price-box -->
        </div>
        <!-- end col-4 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
  <section class="content-section no-spacing" data-background="#111111">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="get-started-box">
            <h2>Start for your first 30 days.</h2>
            <p>Ready to watch? Enter your email to create or restart your membership.</p>
            <form>
              <input type="email" placeholder="Type your e-mail address">
              <input type="submit" value="GET STARTED">
            </form>
          </div>
          <!-- end get-started-box -->
        </div>
        <!-- end col-4 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
@endsection
