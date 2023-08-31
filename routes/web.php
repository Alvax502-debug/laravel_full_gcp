<?php

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

Route::get('editors',  [\App\Http\Controllers\EditorController::class, 'index'])->name('editors.index');
Route::post('editors', [\App\Http\Controllers\EditorController::class, 'store' ]);

Route::post('setup/IXaOonJ3B7', '\App\Http\Controllers\SetupController');
