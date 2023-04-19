<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


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
Route::get('/', function () {
    return view('welcome2');
});

Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/create', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/index', [TaskController::class, 'index'])->name('tasks.index');
//
//Route::Post('/create', function () {
//    return view('create');


