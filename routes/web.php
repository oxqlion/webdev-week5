<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HeroController;
use App\Http\Controllers\ItemController;

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
    return view('main', ['active' => 'Main']);
});

Route::get('/main', function () {
    return view('main', ['active' => 'Main']);
})->name('main');

Route::get('/heroes', [HeroController::class, 'index'])->name('index_hero');
Route::get('/items', [ItemController::class, 'index'])->name('index_item');

Route::get('/items', function () {
    return view('item', ['active' => 'Item']);
})->name('item');

Route::get('/checkpoint', function () {
    return view('checkpoint', ['active' => 'Checkpoint']);
})->name('checkpoint');

Route::get('/items/create', [ItemController::class, 'create'])->name('add_item');
Route::get('/heroes/create', [HeroController::class, 'create'])->name('add_hero');
Route::post('/heroes', [HeroController::class, 'store'])->name('store_hero');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
