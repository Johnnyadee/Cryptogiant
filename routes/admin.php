<?php
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\AdminController;

Route::prefix('admin')->name('admin.')->group(function(){
    Route::view('login', 'auth.adminlogin')->middleware('guest:admin')->name('login');

    $limiter = config('fortify.limiters.login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware(array_filter([
            'guest:admin',
            $limiter ? 'throttle:'.$limiter : null,
        ]))->name('save');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth:admin')->name('logout');
    Route::get('home', [AdminController::class, 'dashboard'])->middleware('auth:admin')->name('home');
    Route::get('wallets', [AdminController::class, 'wallets'])->middleware('auth:admin')->name('wallets');
    Route::get('orders', [AdminController::class, 'orders'])->middleware('auth:admin')->name('orders');
    Route::get('approve/{id}', [AdminController::class, 'approveTransaction'])->middleware('auth:admin')->name('approve');
    Route::get('users', [AdminController::class, 'usersList'])->middleware('auth:admin')->name('users_list');
    Route::get('prices', [AdminController::class, 'prices'])->middleware('auth:admin')->name('prices');
    Route::post('prices-save', [AdminController::class, 'updatePrices'])->middleware('auth:admin')->name('update_prices');

});
