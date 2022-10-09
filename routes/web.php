<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\LogoutController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', function () { return view('front_end.index'); });

Auth::routes(['verify' => true]);

Route::group(['prefix' => 'manage'],function () {
    Route::get('/logout',[LogoutController::class,'logout']);
    Route::post('/profile/create', [ProfilesController::class, 'create'])->name('profile.create');
    Route::group(['middleware' => ['auth','verified','havProfile']], function () {
        Route::get('/welcome', function () { return view('welcome'); })->name('welcome');
        Route::get('/profile',[ProfilesController::class,'index'])->name('profile');
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::resource('listings',ListingsController::class)->except('create');
        Route::get('/listings/create/{listing_type}', [ListingsController::class, 'create'])->name('listing.create');
    });
});
Route::get('/logout',[LogoutController::class,'logout']);
Route::group([ 'prefix' => 'admin/{userId}','as'=>'admin.', 'where' => ['userId' => '[0-9]+'] ],function ($userId) {
    Auth::routes();
    Route::get('/welcome', function () { return view('welcome'); })->middleware(['auth','havProfile'])->name('welcome');
    Route::get('/logout',[LogoutController::class,'logout']);
    Route::group(['middleware' => ['auth','verified','isAdmin','havProfile']], function () {
        Route::get('/profile', [ProfilesController::class, 'index'])->name('profile');
        Route::post('profile/create', [ProfilesController::class, 'create'])->name('profile.create');
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::resource('/listings',ListingsController::class);
    });
    Route::get('/index', function () {
        return view('index');
    });
});
