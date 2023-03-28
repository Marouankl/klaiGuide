<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::GET('/', function () {
    return view('welcome');
});

Auth::routes();

Route::GET('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::GET('/admin', [App\Http\Controllers\HomeController::class, 'randonnes'])->name('home');
Route::group(['middleware' => ['admin']], function () {
    Route::GET('/admin/routes', 'HomeController@admin');
});
Route::resource("/admin/abris",App\Http\Controllers\AbrisController::class);
Route::get('/admin/abris/delete/{code_Abris}/delete','App\Http\Controllers\AbrisController@destroy')->name('abris.delete');

Route::resource("/admin/guides",App\Http\Controllers\GuidesController::class);
Route::get('/admin/guides/delete/{code_Guides}/delete','App\Http\Controllers\GuidesController@destroy')->name('guides.delete');

Route::resource("/admin/ascensions",App\Http\Controllers\AscensionsController::class);
Route::get('/admin/ascensions/delete/{code_Abris}/delete','App\Http\Controllers\AscensionsController@destroy')->name('ascensions.delete');

Route::resource("/admin/vallees",App\Http\Controllers\ValleesController::class);
Route::get('/admin/vallees/delete/{code_Vallees}/delete','App\Http\Controllers\ValleesController@destroy')->name('vallees.delete');

Route::resource("/admin/sommets",App\Http\Controllers\SommetsController::class);
Route::get('/admin/sommets/delete/{code_Sommets}/delete','App\Http\Controllers\SommetsController@destroy')->name('sommets.delete');


