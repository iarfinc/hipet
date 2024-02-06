<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/beranda', [App\Http\Controllers\AuthController::class, 'beranda'])->name('beranda');
Route::get('/layanan', [App\Http\Controllers\AuthController::class, 'layanan'])->name('layanan');
Route::get('/dokter', [App\Http\Controllers\AuthController::class, 'dokter'])->name('dokter');
Route::get('/wawasan', [App\Http\Controllers\AuthController::class, 'wawasan'])->name('wawasan');
Route::get('/tanya', [App\Http\Controllers\AuthController::class, 'tanya'])->name('tanya');
Route::get('/livechat', [App\Http\Controllers\AuthController::class, 'livechat'])->name('livechat');
Route::get('/kesehatan', [App\Http\Controllers\AuthController::class, 'kesehatan'])->name('kesehatan');
Route::get('/kontak', [App\Http\Controllers\AuthController::class, 'kontak'])->name('kontak');
Route::get('/lupa', [App\Http\Controllers\AuthController::class, 'lupa'])->name('lupa');
Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::prefix('products')->group(function () {
        Route::get('', [ProductController::class, 'index'])->name('products');
        Route::get('create', [ProductController::class, 'create'])->name('products.create');
        Route::post('store', [ProductController::class, 'store'])->name('products.store');
        Route::get('show/{id}', [ProductController::class, 'show'])->name('products.show');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('edit/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
    Route::get('/statistics', [App\Http\Controllers\AuthController::class, 'statistics'])->name('statistics');

});