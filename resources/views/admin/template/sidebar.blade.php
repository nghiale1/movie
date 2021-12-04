<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('frontend/admin') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Name shop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('frontend/admin') }}/dist/img/user2-160x160.jpg"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">No name</a>
                <br>
                <a href="#" class="d-block" style="color:red;">Đăng xuất</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="#" class="nav-link
                    @if (Request::path() == 'quan-tri')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Tổng quan</p>
                    </a>
                </li>

                <li class="nav-header">QUẢN LÝ VÉ ĐẶT</li>
                <li class="nav-item">
                    <a href="#" class="nav-link
                    @if (Request::segment(2) == 'phieu-hen')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Phiếu hẹn</p>
                    </a>
                </li>
                <li class="nav-header">QUẢN LÝ TÀI KHOẢN</li>
                <li class="nav-item">
                    <a href="{{ route('type-acc.index') }}" class="nav-link
                    @if (Request::segment(2) == 'loai-tai-khoan')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Loại tài khoản</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('type-member.index') }}" class="nav-link
                    @if (Request::segment(2) == 'loai-thanh-vien')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Loại thành viên</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('account.index') }}" class="nav-link
                    @if (Request::segment(2) == 'account')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Tài khoản nhân viên</p>
                    </a>
                </li> <li class="nav-item">
                    <a href="{{ route('account.indexClient') }}" class="nav-link
                    @if (Request::segment(2) == 'khach-hang')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Tài khoản khách hàng</p>
                    </a>
                </li>
                <li class="nav-header">QUẢN LÝ PHIM</li>
                <li class="nav-item">
                    <a href="{{ route('showtime.index') }}" class="nav-link
                    @if (Request::segment(2) == 'suat-chieu')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Suất chiếu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('movie-type.index') }}" class="nav-link
                    @if (Request::segment(2) == 'loai-phim')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Loại phim</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('movie.index') }}" class="nav-link
                    @if (Request::segment(2) == 'phim')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Phim</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('format.index') }}" class="nav-link
                    @if (Request::segment(2) == 'format')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Định dạng phim</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('language.index') }}" class="nav-link
                    @if (Request::segment(2) == 'language')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Ngôn ngữ phim</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('food.index') }}" class="nav-link
                    @if (Request::segment(2) == 'food')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Thức ăn</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('movie-banner.index') }}" class="nav-link
                    @if (Request::segment(2) == 'movie-banner')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Banner của phim</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('article.index') }}" class="nav-link
                    @if (Request::segment(2) == 'article')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Tin tức về rạp</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('discount.index') }}" class="nav-link
                    @if (Request::segment(2) == 'discount')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Giảm giá thành viên</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('voucher.index') }}" class="nav-link
                    @if (Request::segment(2) == 'voucher')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Voucher</p>
                    </a>
                </li>
                <li class="nav-header">QUẢN LÝ RẠP</li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
