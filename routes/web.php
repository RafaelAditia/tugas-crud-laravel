<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendudukController;
use App\Models\Penduduk;
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
    return redirect('/home');
});
Route::get('/home', [PendudukController::class, 'index']);
Route::post('/home', [PendudukController::class, 'store']);
Route::get('/home/create', [PendudukController::class, 'create']);
Route::get('/home/{id}/edit', [PendudukController::class, 'edit']);
Route::put('/home/{id}', [PendudukController::class, 'update']);
Route::delete('/home/{id}', [PendudukController::class, 'destroy']);