<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main', ['active' => 'Main']);
})->name('main');

Route::get('/heroes', function () {
    return view('hero', ['active' => 'Hero']);
})->name('hero');

Route::get('/checkpoint', function () {
    return view('checkpoint', ['active' => 'Checkpoint']);
})->name('checkpoint');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
