<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::prefix("/")->get('/', function () {
    return view('pages.home');
});



Route::prefix('/')->group(function (){

    //Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    Route::get('/login',[HomeController::class, 'getLogin'])->name('login');

    Route::post('/postlogin',[HomeController::class, 'postLogin'])->name('postlogin');

    Route::get('/postlogout',[HomeController::class, 'postLogout'])->name('postlogout');

    Route::POST('/postuserdel/{id}',[HomeController::class, 'postUserDel'])->name('postuserdel');

    Route::get('/getadd',[HomeController::class, 'getAdd'])->name('getadd');
    
    Route::POST('/postadduser',[HomeController::class, 'postAddUser'])->name('postadduser');

    Route::get('/getedit/{id}',[HomeController::class, 'getEdit'])->name('getedit');

    Route::get('/getdetail/{id}',[HomeController::class, 'getDetail'])->name('getdetail');

    Route::put('/postuserupdate/{id}',[HomeController::class, 'postUserUpdate'])->name('postuserupdate');
});



// /////////////////////////////////////////////////////////////////////
Route::prefix('admin')->group(function () {

    Route::get('dashboard',[DashboardController::class, 'getDashboard'])->name('dashboard')->middleware('checklogin::class');    
    Route::get('worklist',[DashboardController::class, 'getWorkList'])->name('worklist')->middleware('checklogin::class');

});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');