<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// No 1
Route::get('/', function () {
    return 'Halaman Home';
});

// No 2
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        return "Halaman Marbel Edu Games";
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return "Halaman Marbel and Friends Kids Games";
    });
    Route::get('/riri-story-books', function () {
        return "Halaman Riri Story Books";
    });
    Route::get('/kolak-kids-songs', function () {
        return "Halaman Kolak Kids Songs";
    });
});

//No 3
Route::get('/news/{title?}', function ($title = null) {
    return "News ".$title;
});

//No 4
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        return "Halaman Karir Polinema";
    });
    Route::get('/magang', function () {
        return "Halaman Magang Polinema";
    });
    Route::get('/kunjungan-industri', function () {
        return "Halaman Kunjungan Industri Polinema";
    });
}); 

//No 5
Route::get('/about-us', function () {
    return 'Halaman About Our Company';
});

//No 6
Route::resource('contact-us', ContactController::class)->only(['index', 'store']);
