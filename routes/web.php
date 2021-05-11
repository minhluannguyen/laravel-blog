<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
//use App\Http\Controllers\PostController;
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

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);

Route::get('/blogs', function () {
    return "Blogs";
});

Route::get('/detail/{id}', function ($id) {
    return $id;
});

Route::get('/profile', function () {
    return 'Profile';
});

Route::resource('posts', PostController::class);