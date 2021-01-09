<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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
Route::resource('todo',TodoController::class);
/*
Route::get('/todo', [TodoController::class,'index'])->name('todo.index');
Route::get('/create', [TodoController::class,'createTodo']);
Route::get('/edit/{id}', [TodoController::class,'editTodo']);
Route::post('/todo/create', [TodoController::class,'store']);
Route::patch('/todo/update/{id}', [TodoController::class,'update'])->name('todo.update');
*/
Route::put('/todo/completed/{id}', [TodoController::class,'completed'])->name('todo.completed');

