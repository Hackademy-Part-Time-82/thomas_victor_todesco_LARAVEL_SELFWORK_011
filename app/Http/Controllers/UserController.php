<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $books = Book::all(); chiamata al DB generale
        //a noi serve chiamata specifica sui nostri libri, quindi
        $books= Book::where('user_id', auth()->user()->id)->get();
        return view('user.index', [
            'books'=>$books
        ]);
    }
}
