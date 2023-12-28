<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
Route::get('/home', [HomeController::class, 'redirect']);


Route::post('/add_food', [AdminController::class, 'addFood']);
Route::get('/orderFood/{id}', [HomeController::class, 'orderPage']);
Route::post('/place_order', [HomeController::class, 'placeorder']);
Route::post('/cancelOrder/{id}', [HomeController::class, 'cancelOrder']);
Route::get('/myorder', [HomeController::class, 'myorder']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
