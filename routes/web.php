<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\FeeController;
use App\Http\Controllers\User\TestSeriesController;
use App\Http\Controllers\Admin\PaymentApprovalController;
use App\Http\Controllers\Admin\UploadPaperController;
use App\Http\Controllers\ForgotPasswordController;

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

Route::get('/migrate', function () {
    $exitCode = Artisan::call('migrate');
    return 'DONE'; //Return anything
});

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('admin.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search-referral-code', [RegisterController::class, 'searchReferralCode'])->name('search-referral-code');

Route::prefix('admin')->name('admin.')->group(function() {
    // Admin Authentication Route
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('login.submit');
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');
    Route::resource('/users', UsersController::class);
    Route::resource('/course-fee', FeeController::class);
    Route::get('ca-final-new-couse-payment', [PaymentApprovalController::class, 'caFinalNewCoursePayment'])->name('ca-final-new-course-payment');
    Route::get('ca-final-old-course-payment', [PaymentApprovalController::class, 'caFinalOldCoursePayment'])->name('ca-final-old-course-payment');
    Route::get('ca-intermediate-payment', [PaymentApprovalController::class, 'caIntermediatePayment'])->name('ca-intermediate-payment');
    Route::get('ca-ipcc-payment', [PaymentApprovalController::class, 'caIPCCPayment'])->name('ca-ipcc-payment');
    Route::post('/payment-approve', [PaymentApprovalController::class, 'approvePayment'])->name('approve-payment');
    Route::post('/payment-reject', [PaymentApprovalController::class, 'rejectPayment'])->name('reject-payment');
    Route::get('upload-paper', [UploadPaperController::class, 'index'])->name('upload-paper');
    Route::post('upload-paper', [UploadPaperController::class, 'store'])->name('paper-submit');
    Route::delete('upload-paper/{id}', [UploadPaperController::class, 'destroy'])->name('paper-delete');
    Route::get('/get-course-name', [UploadPaperController::class, 'getCourseName'])->name('get-course-name');

});

Route::post('store-payment-details', [TestSeriesController::class , 'storePaymentDetails'])->name('store-payment-details');
Route::post('search-payment-amount', [TestSeriesController::class , 'searchPaymentAmount'])->name('search-payment-amount');
Route::post('submit-answersheet', [TestSeriesController::class, 'submitAnswerSheet'])->name('submit-answersheet');
Route::get('forgot-password', [ForgotPasswordController::class, 'index']);
Route::get('search-email', [ForgotPasswordController::class, 'search'])->name('search-email');
Route::post('forgot-password', [ForgotPasswordController::class, 'store'])->name('forgot-password');
Route::get('search-approval', [TestSeriesController::class, 'searchApproval'])->name('search-approval');
Route::post('approve', [TestSeriesController::class, 'approve'])->name('approve');
Route::get('/test-referral-code', [TestSeriesController::class, 'searchReferralCode'])->name('test-referral-code');
