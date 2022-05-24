<nav class="mobile-menu">
		<div class="inner">
		<div class="mobile-search">
		<h6>Type movie or tv show name to find it</h6>
    <form>
      <input type="search" placeholder="Search here">
      <input type="submit" value="FIND">
    </form>
		</div>
		<!-- end mobile-search -->
  <a href="{{ route('user.login') }}" class="button-account"><i class="lni lni-user"></i> @if (Auth::check())
    {{ Auth::user()->name }}
  @else
  Tài khoản
  @endif </a>
    <!-- end button-account -->
	<div class="site-menu">
    <ul>
      <li><a href="{{ route('index') }}">Trang chủ</a></li>
      <li><a href="{{ route('movie.list') }}">Phim</a></li>
      <li><a href="tv-shows.html">Thành viên</a></li>
      <li><a href="{{ route('client.post') }}">Tin tức & Sự kiện</a></li>
    </ul>
  </div>
  <!-- end site-menu -->
			</div>
		<!-- end inner -->
	</nav>
	<!-- end mobile-menu -->
<nav class="navbar">
  <div class="logo"> <a href="index.html"> <img src="{{asset('client/images/logo.png')}}" alt="Image"> </a> </div>
  <!-- end logo -->
  <div class="site-menu">
    <ul>
        <li><a href="{{ route('index') }}">Trang chủ</a></li>
        <li><a href="{{ route('movie.list') }}">Phim</a></li>
        <li><a href="tv-shows.html">Thành viên</a></li>
        <li><a href="{{ route('client.post') }}">Tin tức & Sự kiện</a></li>
      </ul>
  </div>
  <!-- end site-menu -->
  <div class="user-menu">
    <div class="navbar-search"> <i class="lni lni-search-alt"></i> </div>
    <!-- end navbar-search -->
    <div class="navbar-notify"> <i class="lni lni-alarm"></i><b>2</b>
      <div class="notify-dropdown">
        <div class="total-notify">
          <h6>Notification</h6>
          <span>3</span> </div>
        <!-- end total-notify -->
        <ul>
          <li>
            <p><u>Marcus</u> download 2000+ Simple Line Icons and Explore</p>
            <span>2 Days</span></li>
          <li>
            <p>Added new movie <u>Afterlife</u> Cheatsheet to Start Using With Your Projects.</p>
            <span>3 Days</span></li>
        </ul>
      </div>
      <!-- end notify-dropdown -->
    </div>
    <!-- end navbar-notify -->
    <div class="navbar-account"> <a href="{{ route('user.login') }}">@if (Auth::check())
        {{ Auth::user()->name }}
        <br>
        <br><a href="{{ route('user.logout') }}">Đăng xuất</a>
      @else
      Tài khoản
      @endif  <i class="lni lni-user"></i> </a></div>
    <!-- end navbar-account -->
  </div>
  <!-- end user-menu -->
      <div class="hamburger-menu">
        <button class="hamburger">
        <svg width="45" height="45" viewBox="0 0 100 100">
          <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
          <path class="line line2" d="M 20,50 H 80" />
          <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
        </svg>
        </button>
      </div>
      <!-- end hamburger-menu -->
</nav>
<!-- end navbar -->
<section class="search-box">
  <div class="container">
    <h6>Type movie or tv show name to find it</h6>
    <form>
      <input type="search" placeholder="Search here">
      <input type="submit" value="FIND">
    </form>
    <ul>
      <li><a href="#">Pulp Function</a></li>
      <li><a href="#">Henry Porter</a></li>
      <li><a href="#">The Racer</a></li>
    </ul>
  </div>
  <!-- end container -->
</section>
