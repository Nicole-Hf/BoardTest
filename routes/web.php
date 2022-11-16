<?php

use App\Http\Controllers\SesionController;
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
    return view('index');
})->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    //Route::resource('sesiones', SesionController::class);
    Route::get('sesiones/index', [SesionController::class, 'index'])->name('sesiones.index');
    Route::get('sesiones/create', [SesionController::class, 'create'])->name('sesiones.create');
    Route::post('sesiones/store', [SesionController::class, 'store'])->name('sesiones.store');
    Route::get('sesiones/{code}', [SesionController::class, 'show'])->name('sesiones.show');
});
