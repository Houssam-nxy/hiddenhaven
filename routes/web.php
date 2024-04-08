<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\CrudController;

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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/pictures', [NavbarController::class, 'pictures'])->middleware(['auth'])->name('pictures');
Route::get('/docs', [NavbarController::class, 'docs'])->middleware(['auth'])->name('docs');

Route::resource('/info', CrudController::class)->middleware(['auth']);


require __DIR__.'/auth.php';