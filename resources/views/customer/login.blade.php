@extends('customer.template.master')
{{-- set title in website --}}
@section('title')
    Pu's Cinema
@endsection

{{-- set title page --}}
@section('title-page')
    Pu's Cinema
@endsection

{{-- set title direct --}}
@section('title-direct')
    Pu's Cinema
@endsection

{{-- set content --}}
@section('content')
    <div class="wrapper">

        @include('customer.template.header')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Page Banner Section Start -->
            <div class="page-banner-section section" style="background-image: url({{ URL::asset('frontend/customer') }}/images/hero/hero-1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="page-banner-content col">

                            <h1>Đăng nhập</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div><!-- Page Banner Section End -->

             <!-- Page Section Start -->
            <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-12 mb-40">
                            <div class="login-register-form-wrap">
                                <h3>Login</h3>
                                <form method="post" action="{{ route('user.login') }}" enctype="multipart/form-data" class="mb-30">
                                    <div class="row">
                                        <div class="col-12 mb-15"><input type="email" name="email" id="email" placeholder="Username or Email"></div>
                                        <div class="col-12 mb-15"><input type="password" name="password" id="password" placeholder="Password"></div>
                                        <div class="col-12"><input type="submit" value="Login"></div>
                                    </div>
                                </form>
                                <h4>You can also login with...</h4>
                                <div class="social-login">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mb-40 text-center">
                            <span class="login-register-separator"></span>
                        </div>

                    </div>
                </div>
            </div><!-- Page Section End -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    @yield('content')
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('admin.template.footer')
        @include('admin.template.js')
        <script>
            $(document).ready(function() {
                $(".del").click(function() {
                    if (confirm('Are you sure to delete')) {
                        console.log("true");
                        return true;
                    }
                    console.log("false");
                    return false
                });
            });
        </script>
    </div>
@endsection
