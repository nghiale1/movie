@extends('client.template.master')
@section('header')
    <header class="page-header">
        <div class="container">
            <h1>Đăng nhập</h1>
        </div>
    </header>
@show
@section('content')
    <section class="content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Đăng nhập</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <div class="col-lg-6 col-md-10">
                    <form action="{{ route('user.handle.login') }}" method="post">
                        @csrf
                        <div class="contact-form">
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Tên đăng nhập">
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Mật khẩu">
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="submit" value="Đăng nhập">
                            </div>
                            <!-- end form-group -->
                        </div>
                        <!-- end contact-form -->
                    </form>
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
@endsection
