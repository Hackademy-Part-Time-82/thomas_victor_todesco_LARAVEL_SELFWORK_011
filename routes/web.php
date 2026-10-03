<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/books', [BookController::class, 'index'])->name('index');
Route::get('/register-your-book', [BookController::class, 'create'])->name('create')->middleware('auth');
Route::post('/store-book', [BookController::class, 'store'])->name('store');


Route::get('/authors-index', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/register-authors', [AuthorController::class, 'create'])->name('authors.create')->middleware('auth');
Route::post('/store-author', [AuthorController::class, 'store'])->name('authors.store');

Route::get('/my-account', [UserController::class, 'index'])->name('user.index')->middleware('auth');


Route::get('/scheda-autore-{author}', [AuthorController::class, 'show'])->name('authors.show');
Route::get('/edit-author-{author}', [AuthorController::class, 'edit'])->name('authors.edit');
Route::put('/update-author-{author}', [AuthorController::class, 'update'])->name('authors.update');
Route::delete('/delete-author-{author}', [AuthorController::class, 'destroy'])->name('authors.destroy');


Route::get('/scheda-libro-{book}', [BookController::class, 'show'])->name('show');
Route::get('/modifica-libro-{book}', [BookController::class, 'edit'])->name('books.edit')->middleware('auth');
Route::put('/aggiorna/libro-{book}', [BookController::class, 'update'])->name('book.update')->middleware('auth');
Route::delete('/elimina-libro-{book}', [BookController::class, 'destroy'])->name('book.destroy')->middleware('auth');


/* 

Utilizzare il middleware 'auth' per proteggere una pagina privata a piacere (createla voi una a caso)
direttamente sulla singola route con ->middleware('auth');
oppure raggruppando con:

Route::middleware('auth')->group(function() {
 Le vostre route da proteggere
});


*/
