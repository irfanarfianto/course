<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// tentang kami
Route::get('/tentangkami', [App\Http\Controllers\TentangKamiController::class, 'index'])->name('tentangkami');

// kategori
Route::resource('admin', App\Http\Controllers\AdminKursusController::class)->middleware('isLogin');

// kategori
Route::resource('category', App\Http\Controllers\CategoryController::class)->middleware('isLogin');

Route::prefix('pengajar')->group(
    function () {
        Route::get('dashboard', [\App\Http\Controllers\Pengajar\PengajarController::class, 'index'])->name('dashboard');
        Route::get('courses', [\App\Http\Controllers\Pengajar\PengajarCoursesController::class, 'index'])->name('coursus-list');
    }
);
