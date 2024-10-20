<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;


Route::get('/', [TodoListController::class, 'index'])->name('todo.index');
Route::post('/todo', [TodoListController::class, 'saveItem'])->name('todo.save');
Route::get('/todo/edit/{id}', [TodoListController::class, 'editItem'])->name('todo.edit');
Route::put('/todo/{id}', [TodoListController::class, 'updateItem'])->name('todo.update');
Route::delete('/todo/{id}', [TodoListController::class, 'deleteItem'])->name('todo.delete');
Route::post('/todo/toggle/{id}', [TodoListController::class, 'toggleComplete'])->name('todo.toggle');


