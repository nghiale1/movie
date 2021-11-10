<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng kí thành viên - @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('customer.template.css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('customer.template.header')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Page Banner Section Start -->
            <div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="page-banner-content col">

                            <h1>Register</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.blade.php">Home</a></li>
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
                                <h3>Register</h3>
                                <form method="post" action="{{ route('user.register') }}" enctype="multipart/form-data" class="mb-30">
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-15"><input type="text" name="username" id="username" placeholder="Username"></div>
                                        <div class="col-md-6 col-12 mb-15"><input type="email" name="email" id="email" placeholder="Email"></div>
                                        <div class="col-md-6 col-12 mb-15"><input type="password" name="password" id="password" placeholder="Password"></div>
                                        <div class="col-md-6 col-12 mb-15"><input type="password" name="confirm_password" id="confirm_password" placeholder="Nhập lại password"></div>
                                        <div class="col-md-6 col-12 mb-15"><input type="text" name="name" id="name" placeholder="Họ và tên"></div>
                                        <div class="col-md-6 col-12 mb-15">Ư
                                            <input type="radio" value="0" id="sex" name="sex" style="margin-left:15px;">
                                            <label>Nam</label>
                                            <input type="radio" value="1" id="sex" name="sex" style="margin-left:10px;">
                                            <label>Nữ</label></div>
                                        <div class="col-md-6 col-12 mb-15"><textarea type="text" name="address" id="address" placeholder="Địa chỉ"></div>
                                        <div class="col-md-6 col-12 mb-15"><input type="text" name="phone_number" id="phone_number" placeholder="Số điện thoại"></div>
                                        <div class="col-md-6 col-12 mb-15"><input type="datetime" name="birthday" id="birthday"></div>
                                        <div class="col-md-6 col-12"><input type="submit" value="Register"></div>
                                    </div>
                                </form>
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
</body>

</html>
