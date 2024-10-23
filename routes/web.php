<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gurucontroller;
use App\Http\Controllers\newscontroller;
use App\Http\Controllers\siswacontroller;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route khusus untuk role "siswa"
Route::group(['middleware' => ['auth', 'role:siswa']], function () {
    Route::resource('siswa', siswacontroller::class);
    // Tambahkan route lain khusus siswa di sini
});


// Route khusus untuk role "guru"
Route::group(['middleware' => ['auth', 'role:guru']], function () {
    Route::resource('guru', gurucontroller::class);
    // Tambahkan route lain khusus guru di sini
});

Route::resource('news', newscontroller::class);

require __DIR__.'/auth.php';
