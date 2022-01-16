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

//Route::get('/hello', [PostController::class, 'hello'])->middleware('check_token');

Route::get('/login', function () {
    return 'Login page... Thêm tham số sau vào URL: [?token=1]';
});

Route::middleware(['check_token'])->group(function () {

    Route::get('/hello', [PostController::class, 'hello']);

});

Route::middleware(['check_token_header'])->group(function () {

    Route::get('/check-token', function () {
        echo "check-token-pass";
    });

});

Route::middleware(['check_role:user'])->group(function () {

    Route::get('/check-role', function () {
        echo "check-role-pass";
    });

});
