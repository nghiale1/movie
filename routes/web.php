<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieTypeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TypeAccController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\FormatController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\TypeMemberController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\DetailTickerController;
use App\Http\Controllers\DiscountForMemController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\MethodPaymentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\SeatInRoomController;
use App\Http\Controllers\ShowTimeController;
use App\Http\Controllers\TicketMovieController;
use App\Http\Controllers\TicketFoodController;
use App\Http\Controllers\TypeSeatController;
use App\Http\Controllers\TypeShowTimeController;
use App\Http\Controllers\AuthController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('customer.index');
});

//Quản trị
Route::prefix('quan-tri')->group(function () {
     //Tài khoản
     Route::prefix('/tai-khoan')->group(function () {
        Route::get('/', [AuthController::class, 'index'])->name('user.index');
        Route::get('/them-moi', [AuthController::class, 'create'])->name('user.add');
        Route::post('xu-ly-them', [AuthController::class, 'store'])->name('user.register');
        Route::get('/chinh-sua/{id}', [AuthController::class, 'edit'])->name('user.edit');
        Route::post('/xu-ly-sua/{id}', [AuthController::class, 'update'])->name('user.update');
        Route::get('/xoa/{id}', [AuthController::class, 'destroy'])->name('user.destroy');
    });
    //Loại phim
    Route::prefix('/loai-phim')->group(function () {
        Route::get('/', [MovieTypeController::class, 'index'])->name('movie-type.index');
        Route::get('/them-moi', [MovieTypeController::class, 'create'])->name('movie-type.add');
        Route::post('xu-ly-them', [MovieTypeController::class, 'store'])->name('movie-type.store');
        Route::get('/chinh-sua/{id}', [MovieTypeController::class, 'edit'])->name('movie-type.edit');
        Route::post('/xu-ly-sua/{id}', [MovieTypeController::class, 'update'])->name('movie-type.update');
        Route::get('/xoa/{id}', [MovieTypeController::class, 'destroy'])->name('movie-type.destroy');
    });
    //Phim
    Route::prefix('/suat-chieu')->name('showtime')->group(function () {
        Route::get('/', [ShowTimeController::class, 'index'])->name('index');
        Route::get('/them-moi', [ShowTimeController::class, 'create'])->name('add');
        Route::post('xu-ly-them', [ShowTimeController::class, 'store'])->name('store');
        Route::get('/chinh-sua/{movie}', [ShowTimeController::class, 'edit'])->name('edit');
        Route::post('/xu-ly-sua/{movie}', [ShowTimeController::class, 'update'])->name('update');
        Route::get('/xoa/{movie}', [ShowTimeController::class, 'destroy'])->name('destroy');
    });
    //Phim
    Route::prefix('/phim')->group(function () {
        Route::get('/', [MovieController::class, 'index'])->name('movie.index');
        Route::get('/them-moi', [MovieController::class, 'create'])->name('movie.add');
        Route::post('xu-ly-them', [MovieController::class, 'store'])->name('movie.store');
        Route::get('/chinh-sua/{movie}', [MovieController::class, 'edit'])->name('movie.edit');
        Route::post('/xu-ly-sua/{movie}', [MovieController::class, 'update'])->name('movie.update');
        Route::get('/xoa/{movie}', [MovieController::class, 'destroy'])->name('movie.destroy');
    });
    //Tài khoản
    Route::prefix('/type-acc')->group(function () {
        Route::get('/', [TypeAccController::class, 'index'])->name('type-acc.index');
        Route::get('/them-moi', [TypeAccController::class, 'create'])->name('type-acc.add');
        Route::post('xu-ly-them', [TypeAccController::class, 'store'])->name('type-acc.store');
        Route::get('/chinh-sua/{id}', [TypeAccController::class, 'edit'])->name('type-acc.edit');
        Route::post('/xu-ly-sua/{id}', [TypeAccController::class, 'update'])->name('type-acc.update');
        Route::get('/xoa/{id}', [TypeAccController::class, 'destroy'])->name('type-acc.destroy');
    });
    //Loại tài khoản
    Route::prefix('/account')->group(function () {
        Route::get('/', [AccountController::class, 'index'])->name('account.index');
        Route::get('/them-moi', [AccountController::class, 'create'])->name('account.add');
        Route::post('xu-ly-them', [AccountController::class, 'register'])->name('account.store');
        Route::get('/chinh-sua/{id}', [AccountController::class, 'edit'])->name('account.edit');
        Route::post('/xu-ly-sua/{id}', [AccountController::class, 'update'])->name('account.update');
        Route::get('/xoa/{id}', [AccountController::class, 'destroy'])->name('account.destroy');
    });
    //Bài đăng
    Route::prefix('/article')->group(function () {
        Route::get('/', [ArticleController::class, 'index'])->name('article.index');
        Route::get('/them-moi', [ArticleController::class, 'create'])->name('article.add');
        Route::post('xu-ly-them', [ArticleController::class, 'store'])->name('article.store');
        Route::get('/chinh-sua/{id}', [ArticleController::class, 'edit'])->name('article.edit');
        Route::post('/xu-ly-sua/{id}', [ArticleController::class, 'update'])->name('article.update');
        Route::get('/xoa/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');
    });
    //Banner
    Route::prefix('/banner')->group(function () {
        Route::get('/', [BannerController::class, 'index'])->name('movie-banner.index');
        Route::get('/them-moi', [BannerController::class, 'create'])->name('movie-banner.add');
        Route::post('xu-ly-them', [BannerController::class, 'store'])->name('movie-banner.store');
        Route::get('/chinh-sua/{banner}', [BannerController::class, 'edit'])->name('movie-banner.edit');
        Route::post('/xu-ly-sua/{banner}', [BannerController::class, 'update'])->name('movie-banner.update');
        Route::get('/xoa/{banner}', [BannerController::class, 'destroy'])->name('movie-banner.destroy');
    });
    //Giảm giá
    Route::prefix('/discount')->group(function () {
        Route::get('/', [DiscountController::class, 'index'])->name('discount.index');
        Route::get('/them-moi', [DiscountController::class, 'create'])->name('discount.add');
        Route::post('xu-ly-them', [DiscountController::class, 'store'])->name('discount.store');
        Route::get('/chinh-sua/{id}', [DiscountController::class, 'edit'])->name('discount.edit');
        Route::post('/xu-ly-sua/{id}', [DiscountController::class, 'update'])->name('discount.update');
        Route::get('/xoa/{id}', [DiscountController::class, 'destroy'])->name('discount.destroy');
    });
    //Định dạng phim
    Route::prefix('/format')->group(function () {
        Route::get('/', [FormatController::class, 'index'])->name('format.index');
        Route::get('/them-moi', [FormatController::class, 'create'])->name('format.add');
        Route::post('xu-ly-them', [FormatController::class, 'store'])->name('format.store');
        Route::get('/chinh-sua/{id}', [FormatController::class, 'edit'])->name('format.edit');
        Route::post('/xu-ly-sua/{id}', [FormatController::class, 'update'])->name('format.update');
        Route::get('/xoa/{id}', [FormatController::class, 'destroy'])->name('format.destroy');
    });
    //Ngôn ngữ phim
    Route::prefix('/language')->group(function () {
        Route::get('/', [LanguageController::class, 'index'])->name('language.index');
        Route::get('/them-moi', [LanguageController::class, 'create'])->name('language.add');
        Route::post('xu-ly-them', [LanguageController::class, 'store'])->name('language.store');
        Route::get('/chinh-sua/{id}', [LanguageController::class, 'edit'])->name('language.edit');
        Route::post('/xu-ly-sua/{id}', [LanguageController::class, 'update'])->name('language.update');
        Route::get('/xoa/{id}', [LanguageController::class, 'destroy'])->name('language.destroy');
    });
    //Voucher
    Route::prefix('/voucher')->group(function () {
        Route::get('/', [VoucherController::class, 'index'])->name('voucher.index');
        Route::get('/them-moi', [VoucherController::class, 'create'])->name('voucher.add');
        Route::post('xu-ly-them', [VoucherController::class, 'store'])->name('voucher.store');
        Route::get('/chinh-sua/{id}', [VoucherController::class, 'edit'])->name('voucher.edit');
        Route::post('/xu-ly-sua/{id}', [VoucherController::class, 'update'])->name('voucher.update');
        Route::get('/xoa/{id}', [VoucherController::class, 'destroy'])->name('voucher.destroy');
    });
    //Loại thành viên
        Route::prefix('/type_member')->group(function () {
        Route::get('/', [TypeMemberController::class, 'index'])->name('type-member.index');
        Route::get('/them-moi', [TypeMemberController::class, 'create'])->name('type-member.add');
        Route::post('xu-ly-them', [TypeMemberController::class, 'store'])->name('type-member.store');
        Route::get('/chinh-sua/{id}', [TypeMemberController::class, 'edit'])->name('type-member.edit');
        Route::post('/xu-ly-sua/{id}', [TypeMemberController::class, 'update'])->name('type-member.update');
        Route::get('/xoa/{id}', [TypeMemberController::class, 'destroy'])->name('type-member.destroy');
    });
    //Chi nhánh
    Route::prefix('/branch')->group(function () {
        Route::get('/', [BranchController::class, 'index'])->name('branch.index');
        Route::get('/them-moi', [BranchController::class, 'create'])->name('branch.add');
        Route::post('xu-ly-them', [BranchController::class, 'store'])->name('branch.store');
        Route::get('/chinh-sua/{id}', [BranchController::class, 'edit'])->name('branch.edit');
        Route::post('/xu-ly-sua/{id}', [BranchController::class, 'update'])->name('branch.update');
        Route::get('/xoa/{id}', [BranchController::class, 'destroy'])->name('branch.destroy');
    });
    //Đồ ăn thêm
    Route::prefix('/food')->group(function () {
        Route::get('/', [FoodController::class, 'index'])->name('food.index');
        Route::get('/them-moi', [FoodController::class, 'create'])->name('food.add');
        Route::post('xu-ly-them', [FoodController::class, 'store'])->name('food.store');
        Route::get('/chinh-sua/{id}', [FoodController::class, 'edit'])->name('food.edit');
        Route::post('/xu-ly-sua/{id}', [FoodController::class, 'update'])->name('food.update');
        Route::get('/xoa/{id}', [FoodController::class, 'destroy'])->name('food.destroy');
    });
    //Phòng
    Route::prefix('/room')->group(function () {
        Route::get('/', [RoomController::class, 'index'])->name('room.index');
        Route::get('/them-moi', [RoomController::class, 'create'])->name('room.add');
        Route::post('xu-ly-them', [RoomController::class, 'store'])->name('room.store');
        Route::get('/chinh-sua/{id}', [RoomController::class, 'edit'])->name('room.edit');
        Route::post('/xu-ly-sua/{id}', [RoomController::class, 'update'])->name('room.update');
        Route::get('/xoa/{id}', [RoomController::class, 'destroy'])->name('room.destroy');
    });
     //Ghế
     Route::prefix('/seat')->group(function () {
        Route::get('/', [SeatController::class, 'index'])->name('seat.index');
        Route::get('/them-moi', [SeatController::class, 'create'])->name('seat.add');
        Route::post('xu-ly-them', [SeatController::class, 'store'])->name('seat.store');
        Route::get('/chinh-sua/{id}', [SeatController::class, 'edit'])->name('seat.edit');
        Route::post('/xu-ly-sua/{id}', [SeatController::class, 'update'])->name('seat.update');
        Route::get('/xoa/{id}', [SeatController::class, 'destroy'])->name('seat.destroy');
    });
     //Loại ghế
     Route::prefix('/type-seat')->group(function () {
        Route::get('/', [TypeSeatController::class, 'index'])->name('type-seat.index');
        Route::get('/them-moi', [TypeSeatController::class, 'create'])->name('type-seat.add');
        Route::post('xu-ly-them', [TypeSeatController::class, 'store'])->name('type-seat.store');
        Route::get('/chinh-sua/{id}', [TypeSeatController::class, 'edit'])->name('type-seat.edit');
        Route::post('/xu-ly-sua/{id}', [TypeSeatController::class, 'update'])->name('type-seat.update');
        Route::get('/xoa/{id}', [TypeSeatController::class, 'destroy'])->name('type-seat.destroy');
    });
     //Loại suất chiếu
     Route::prefix('/type-showtime')->group(function () {
        Route::get('/', [TypeShowTimeController::class, 'index'])->name('type-showtime.index');
        Route::get('/them-moi', [TypeShowTimeController::class, 'create'])->name('type-showtime.add');
        Route::post('xu-ly-them', [TypeShowTimeController::class, 'store'])->name('type-showtime.store');
        Route::get('/chinh-sua/{id}', [TypeShowTimeController::class, 'edit'])->name('type-showtime.edit');
        Route::post('/xu-ly-sua/{id}', [TypeShowTimeController::class, 'update'])->name('type-showtime.update');
        Route::get('/xoa/{id}', [TypeShowTimeController::class, 'destroy'])->name('type-showtime.destroy');
    });
    //Suất chiếu
    Route::prefix('/showtime')->group(function () {
        Route::get('/', [ShowTimeController::class, 'index'])->name('showtime.index');
        Route::get('/them-moi', [ShowTimeController::class, 'create'])->name('showtime.add');
        Route::post('xu-ly-them', [ShowTimeController::class, 'store'])->name('showtime.store');
        Route::get('/chinh-sua/{id}', [ShowTimeController::class, 'edit'])->name('showtime.edit');
        Route::post('/xu-ly-sua/{id}', [ShowTimeController::class, 'update'])->name('showtime.update');
        Route::get('/xoa/{id}', [ShowTimeController::class, 'destroy'])->name('showtime.destroy');
    });
    //Phương thức thanh toán
    Route::prefix('/method_payment')->group(function () {
        Route::get('/', [MethodPaymentController::class, 'index'])->name('method_payment.index');
        Route::get('/them-moi', [MethodPaymentController::class, 'create'])->name('method_payment.add');
        Route::post('xu-ly-them', [MethodPaymentController::class, 'store'])->name('method_payment.store');
        Route::get('/chinh-sua/{id}', [MethodPaymentController::class, 'edit'])->name('method_payment.edit');
        Route::post('/xu-ly-sua/{id}', [MethodPaymentController::class, 'update'])->name('method_payment.update');
        Route::get('/xoa/{id}', [MethodPaymentController::class, 'destroy'])->name('method_payment.destroy');
    });
    //Thanh toán bill
        Route::prefix('/payment')->group(function () {
        Route::get('/', [PaymentController::class, 'index'])->name('payment.index');
        Route::get('/them-moi', [PaymentController::class, 'create'])->name('payment.add');
        Route::post('xu-ly-them', [PaymentController::class, 'store'])->name('payment.store');
        Route::get('/chinh-sua/{id}', [PaymentController::class, 'edit'])->name('payment.edit');
        Route::post('/xu-ly-sua/{id}', [PaymentController::class, 'update'])->name('payment.update');
        Route::get('/xoa/{id}', [PaymentController::class, 'destroy'])->name('payment.destroy');
    });

});