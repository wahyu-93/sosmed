<?php

use App\Http\Controllers\FollowingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TimelineController;
use Illuminate\Support\Facades\Route;

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

Route::get('/timeline', TimelineController::class)->name('timeline');
Route::post('/status', [StatusController::class, 'store'])->name('status.store');
Route::get('/profile/{user}', ProfileController::class)->name('profile');
Route::get('/profile/{user}/{following}', [FollowingController::class, 'index'])->name('profile.follow');
Route::post('/profile/{user}/store', [FollowingController::class, 'store'])->name('profile.follow.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
