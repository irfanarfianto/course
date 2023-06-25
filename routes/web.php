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
Route::resource('category', App\Http\Controllers\CategoryController::class)->only(['index', 'show']);

Route::prefix('pengajar')->middleware('role:pengajar')->group(
    function () {
        Route::get('dashboard', [\App\Http\Controllers\Pengajar\PengajarController::class, 'index'])->name('dashboard');
        Route::get('courses', [\App\Http\Controllers\Pengajar\PengajarCoursesController::class, 'index'])->name('courses-list');
        Route::get('courses/create', [\App\Http\Controllers\Pengajar\PengajarCoursesController::class, 'create'])->name('courses-create');
        Route::post('courses', [\App\Http\Controllers\Pengajar\PengajarCoursesController::class, 'store'])->name('courses-store');
    }
);

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::prefix('siswa')->middleware('role:siswa')->group(
    function () {
        Route::get('home', [\App\Http\Controllers\Siswa\SiswaController::class, 'index'])->name('home');
        Route::get('category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category-list');
    }
);
