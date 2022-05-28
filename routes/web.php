<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/books');

Route::get('/books', [BookController::class, 'index'])->name('home');
Route::get('/books/create', [BookController::class, 'create'])->name('create_book');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('edit_book');
Route::post('/books', [BookController::class, 'store'])->name('store_book');
Route::get('/books/{id}', [BookController::class, 'show'])->name('show_book');
Route::put('/books/{id}', [BookController::class, 'update'])->name('update_book');
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('delete_book');

Route::post('/reviews', [ReviewController::class, 'store'])->name('store_review')->middleware('auth');

Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions');

Route::get('/transaction/{id}', [TransactionController::class, 'show'])->name('purchase');
Route::post('/transactions', [TransactionController::class, 'store'])->name('store_transaction');

require __DIR__.'/auth.php';
