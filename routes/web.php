<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Front\FrontController;

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



Route::prefix('/admin')->group(function () {

    Route::group(['middleware' => 'islogin'],function()
    {
        Route::get('/login',[LoginController::class,'index'])->name('login');
        Route::post('/login',[LoginController::class,'login_post'])->name('login_post');
    });

    Route::group(['middleware' => 'notlogin'],function()
    {
        Route::get('/',[AdminController::class,'index'])->name('admin.index');
        Route::get('/logout',[LoginController::class,'logout'])->name('logout');
    });
});

Route::get('/', [FrontController::class,'index'])->name('index');
Route::get('/blog', [FrontController::class,'blog'])->name('blog');
Route::get('/contact', [FrontController::class,'contact'])->name('contact');
Route::get('/resume', [FrontController::class,'resume'])->name('resume');
Route::get('/portfolio', [FrontController::class,'portfolio'])->name('portfolio');



Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);