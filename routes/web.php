<?php

use App\Http\Controllers\ToDoListController;
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

Route::get('/', [ToDoListController::class, 'index']);

Route::post('/', [ToDoListController::class, 'store']);

Route::delete('/tasks/{id}', [ToDoListController::class, 'destroy'])->name('tasks.destroy');

Route::get('/about', function () {
    return view('welcome');
});


// Route::post('/tambahTask', [TodoTaskController::class, 'addTask']);
