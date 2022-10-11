<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProjectController::class, 'index'])->name('home');

Route::get('/addProject', [ProjectController::class, 'create']);

Route::post('/addProject', [ProjectController::class, 'store'])->name('addProject');

Route::get('/projectTask/{id}', [TaskController::class, 'index'])->name('task');

Route::get('/projectTask/add/{id}', [TaskController::class, 'create'])->name('addTask');

Route::post('/projectTask/store', [TaskController::class, 'store'])->name('storeTask');

