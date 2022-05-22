<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#e90101"/>
<title>digiflex | Online Movie Streaming</title>
<meta name="author" content="Themezinho">
<meta name="description" content="For all kind of video streaming website">
<meta name="keywords" content="digiflex, video, movie, show, tv, watch, online, streaming, stream, ads, trailer, imdb, dram, action, hollywood, cinema, rate">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="digiflex | Online Movie Streaming">
<meta property="og:image" content="http://www.themezinho.net/digiflex/preview.png">
<meta property="og:site_name" content="digiflex">
<meta property="og:title" content="digiflex">
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.themezinho.net/digiflex">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@digiflex">
<meta name="twitter:creator" content="@digiflex">
<meta name="twitter:title" content="digiflex">
<meta name="twitter:description" content="digiflex | Online Movie Streaming">
<meta name="twitter:image" content="http://www.themezinho.net/digiflex/preview.png">

<!-- FAVICON FILES -->
<link href="{{asset('client/ico/apple-touch-icon-144-precomposed.png')}}" rel="apple-touch-icon" sizes="144x144">
<link href="{{asset('client/ico/apple-touch-icon-114-precomposed.pn')}}g" rel="apple-touch-icon" sizes="114x114">
<link href="{{asset('client/ico/apple-touch-icon-72-precomposed.png')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{asset('client/ico/apple-touch-icon-57-precomposed.png')}}" rel="apple-touch-icon">
<link href="{{asset('client/ico/favicon.png" rel="shortcut icon')}}">

<!-- CSS FILES -->
<link rel="stylesheet" href="{{asset('client/css/lineicons.css')}}">
<link rel="stylesheet" href="{{asset('client/css/fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('client/css/swiper.min.css')}}">
<link rel="stylesheet" href="{{asset('client/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('client/css/style.css')}}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
@include('client.template.sidebar')
@yield('header')
{{-- @include('client.template.slider') --}}
<!-- end slider -->
<main style="@if(Request::segment(2) == 'mua-ve')
margin-top: 100px !important;
@endif">
  @yield('content')


 @include('client.template.footer')
  <!-- end footer -->
</main>

<!-- JS FILES -->
@include('client.template.js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@stack('booking')
</body>
</html>
