<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/books', [BooksController::class, 'index'])->name('books.index');
Route::get('/books/create', [BooksController::class, 'create'])->name('books.create');
Route::post('/books/create/store', [BooksController::class, 'store'])->name('books.store');
Route::get('/books/{id}/edit', [BooksController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BooksController::class, 'update'])->name('books.update');
Route::delete('/books/{id}', [BooksController::class, 'destroy'])->name('books.destroy');