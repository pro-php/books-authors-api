<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Book;
use Illuminate\Contracts\View\View;

class MainController extends BaseController
{
    public function index(): View {
        $books = Book::all();
        //$books = Book::with('author')->get();

        return view('books', ['books' => $books]);
    }
}
