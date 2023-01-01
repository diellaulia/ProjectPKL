<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\MediaController;

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

Route::get('/', [PublicController::class, 'index']);

// Route::get('/homepage', [PublicController::class, 'homepage']);
Route::get('/informasi', [PublicController::class, 'informasi']);
Route::get('/media', [PublicController::class, 'media']);
Route::get('/about', [PublicController::class, 'about']);
Route::get('/profil', [PublicController::class, 'profil']);
Route::get('/sejarah', [PublicController::class, 'sejarah']);
Route::get('/visimisi', [PublicController::class, 'visimisi']);
Route::get('/strategibisnis', [PublicController::class, 'strategibisnis']);
Route::get('/kebijakanmutu', [PublicController::class, 'kebijakanmutu']);
Route::get('/budayakerja', [PublicController::class, 'budayakerja']);
Route::get('/wilayahkerja', [PublicController::class, 'wilayahkerja']);
Route::get('/komisaris', [PublicController::class, 'komisaris']);
Route::get('/direksi', [PublicController::class, 'direksi']);
Route::get('/gm', [PublicController::class, 'gm']);
Route::get('/kadiv', [PublicController::class, 'kadiv']);



// Route::middleware(['homepage', 'dashboard'])->group(function () {
//     Route::get('/', [DashboardController::class, 'index']);
// });

Route::group([
    'middleware' => [
        'auth', 'verified'
    ]
], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('/informasi', InformationController::class);
    Route::resource('/media', MediaController::class);
});

require __DIR__ . '/auth.php';
