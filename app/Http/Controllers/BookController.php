<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Mail\BookMail;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Pest\Support\View;
use Illuminate\Support\Str;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('index', [
            'books' => $books
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(BookStoreRequest $request)
    {
        $path_image = '';
        if ($request->hasFile('image')) {
            $book_folder= 'covers/'. Str::slug($request->input('title'));
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs($book_folder , $path_name, 'public');
        }
        $book = Book::create([
            'title' => $request->input('title'),
            'year' => $request->input('year'),
            'pages' => $request->input('pages'),
            'image' => $path_image,
            'user_id' => auth()->user()->id,
            //inserire author_id??
        ]);
        //Mail::to('tommytod93@gmail.com')->send(new BookMail($book));
        return redirect()->route('create')->with('success', "Libro inserito correttamente in archivio");
    }


    public function show(Book $book)
    {
        return view('show', ['book' => $book]);
    }

    public function edit(Book $book)
    {
        return view('edit', ['book' => $book]);
    }

    public function update(BookStoreRequest $request, Book $book)
    {
        $path_image = $book->image;
        if ($request->hasFile('image')) {
            $book_folder= 'covers/'. Str::slug($request->input('title'));
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs($book_folder, $path_name, 'public');
        }
        $book->update([

            'title' => $request->input('title'),
            'year' => $request->input('year'),
            'pages' => $request->input('pages'),
            'image' => $path_image,
        ]);
                return redirect()->route('show', ['book'=>$book])->with('success', "Libro modificato con successo");

    }

    public function destroy (Book $book) {
        $book->delete();
        return redirect()->route('index')->with('success', "Libro eliminato con successo");
        }
}
