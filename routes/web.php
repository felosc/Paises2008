<?php

use App\Http\Controllers\PaisController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::controller(PaisController::class)->group(function () {
    Route::get('paises', 'index')->name('verpaises');
    Route::get('crearpais', 'create')->name('crearpais');
    Route::post('nuevopais', 'store')->name('nuevopais');
    Route::get('pais/{pais}', 'show')->name('verpais');
    Route::get('editpais/{pais}', 'edit')->name('editarpais');
    Route::put('actualizarpais/{pais}', 'update')->name('actualizarpais');
    Route::delete('borrarpais/{pais}', 'destroy')->name('borrarpais');
});

require __DIR__ . '/auth.php';
