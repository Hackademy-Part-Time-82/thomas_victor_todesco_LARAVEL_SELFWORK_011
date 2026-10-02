<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/books', [BookController::class, 'index'])->name('index');
//questa rotta rimanda alla pagina dell'elenco dei libri
//rotta INDEX

Route::get('/register-your-book', [BookController::class, 'create'])->name('create')->middleware('auth');
//questa rotta rimanda alla pagina con il form per la registrazione dei libri
//rotta CREATE

Route::post('/store-book', [BookController::class, 'store'])->name('store');
//rotta post per regisrare libro su DB al click sul button
//rotta POST


Route::get('/my-account', [UserController::class, 'index'])->name('user.index')->middleware('auth');
//rotta per vedere profilo
//solo da loggato


Route::get('/scheda-{book}', [BookController::class, 'show'])->name('show');
//rotta post per visualizzare scheda libro 
//rotta SHOW


Route::get('/modifica-libro-{book}', [BookController::class, 'edit'])->name('books.edit')->middleware('auth');
//rotta post per visualizzare scheda libro già compilata con form per modifica
//rotta EDIT

Route::put('/aggiorna/libro{book}', [BookController::class, 'update'])->name('book.update')->middleware('auth');
//rotta post per applicare modifiche al libro 
//rotta UPDATE

Route::delete('/elimina-libro-{book}', [BookController::class, 'destroy'])->name('book.destroy')->middleware('auth');
//rotta post per cancellare un libro 
//rotta DELETE

/* 

Utilizzare il middleware 'auth' per proteggere una pagina privata a piacere (createla voi una a caso)
direttamente sulla singola route con ->middleware('auth');
oppure raggruppando con:

Route::middleware('auth')->group(function() {
 Le vostre route da proteggere
});


*/
