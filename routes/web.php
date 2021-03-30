<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
use App\Http\Middleware\ValidUser;

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
    return view('welcome');
});
Route::get('about-crypto-gaint', function () {
    return view('about');
});
Route::get('how-it-works', function () {
    return view('work-process');
});
Route::get('gaint-coin-features', function () {
    return view('features');
});
Route::get('buy-and-sell', function () {
    return view('trade');
});
Route::get('faq-and-support', function () {
    return view('faq');
});
Route::get('contact', function () {
    return view('contact');
});

// Email Verification for users
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/user/welcome');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// End of Email Verification


// User Account
Route::get('user/kyc-profile', [UserController::class, 'kycProfile'])->name('user_fill_up');
Route::post('user/account_setup', [UserController::class, 'userAccountSetup'])->name('account_setup');
    Route::post('user/account_setup_one', [UserController::class, 'userAccountSetupOne'])->name('account_setup_one');
    Route::post('user/account_setup_two', [UserController::class, 'userAccountSetupTwo'])->name('account_setup_two');
Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::middleware([ValidUser::class])->group(function(){
    Route::get('user/welcome', function () {
        return view('user.welcome');
    });
    
    
    Route::get('user/account', function () {
        return view('user.account');
    });
    Route::get('profile', function () {
        return view('user.profile');
    })->name('user_cg_profile');
    
    Route::get('user/test-api', [UserController::class, 'testBlockApi'])->name('test_block_api');
    Route::get('user/wallet', [WalletController::class, 'userWallect'])->name('user_wallet');
    Route::get('user/orders', [WalletController::class, 'orderList'])->name('order_list');
    Route::get('user/payment_made', [WalletController::class, 'paymentMade'])->name('payment_made');
    Route::get('user/trade', [UserController::class, 'tradeNow'])->name('trade_now');
    Route::post('user/sendcoin', [WalletController::class, 'sendCoin'])->name('send_coin');
    Route::get('dashboard', function() {
        return redirect()->route('dashboard');
    });
});
Route::get('logout', function() {
    Auth::logout();
    return redirect()->route('login');
});
// Admin Routes
require __DIR__ . '/admin.php';
