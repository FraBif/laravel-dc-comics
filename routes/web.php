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

Route::get('/', [Controller::class, 'index']) -> name ('home');
Route::get('/{id}', [Controller::class, 'show']) -> name('show');
Route::get('/create', [Controller::class, 'create']) -> name ('create');
Route::get('/{id}/edit', [Controller::class, 'edit']) -> name ('edit');
Route::put('/{id}', [Controller::class, 'update']) -> name ('update');
Route::delete('/{id}', [Controller::class, 'destroy']) -> name ('destroy');
