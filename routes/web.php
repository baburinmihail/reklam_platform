<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZakazController;
use App\Http\Controllers\AuthmezController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\AdminpanelController;
use App\Http\Controllers\StatistickController;
use App\Http\Controllers\ExitController;



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

Route::get('/', function () {
    return redirect('/zakaz');
});


Route::resource('admin' , AdminpanelController::class);

Route::resource('statistick' , StatistickController::class);

Route::resource('zakaz' , ZakazController::class);

Route::resource('authmez' , AuthmezController::class);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/exit', [ExitController::class, 'exit']);

Route::post('/status_edit', [StatusController::class, 'status_edit']);

Route::post('/my_count_add', [CounterController::class, 'my_count_add']);

Route::post('/my_count_delit', [CounterController::class, 'my_count_delit']);

Route::get('/link_redirect/{id_zakaz}/{id_counter}', [LinkController::class, 'link_redirect'] ) ->name(('link_redirect'));

