<?php

use App\Http\Controllers\PostController;
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

// Dashboard (Admin)
Route::prefix('admin')
    //->middleware('CheckAdminLogin')
    ->group(function () {
    Route::redirect('', 'admin/user');

    Route::resource('post', \App\Http\Controllers\Admin\PostController::class);

    /*Route::prefix('login')->group(function () {
        Route::get('', [\App\Http\Controllers\Admin\HomeController::class, 'getLogin'])->withoutMiddleware('CheckAdminLogin');
        Route::post('', [App\Http\Controllers\Admin\HomeController::class, 'postLogin'])->withoutMiddleware('CheckAdminLogin');
    });

    Route::get('logout', [App\Http\Controllers\Admin\HomeController::class, 'logout']);*/
});
