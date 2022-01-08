<?php

use App\Http\Controllers\ExploreUserController;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\UpdateProfileController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', WelcomeController::class)->name('welcome');

Route::middleware('auth')->group(function(){
    Route::get('timeline', TimelineController::class)->name('timeline');
    Route::post('status', [StatusController::class, 'store'])->name('status.store');
    
    Route::get('explorer', ExploreUserController::class)->name('explorer.index');

    Route::prefix('profile')->group(function(){
        Route::get('edit', [UpdateProfileController::class, 'edit'])->name('profile.edit');
        Route::put('edit', [UpdateProfileController::class, 'update'])->name('profile.update');

        Route::get('{user}', ProfileController::class)->name('profile');
        Route::get('{user}/{following}', [FollowingController::class, 'index'])->name('profile.follow');
        Route::post('{user}/store', [FollowingController::class, 'store'])->name('profile.follow.store');
    });
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
