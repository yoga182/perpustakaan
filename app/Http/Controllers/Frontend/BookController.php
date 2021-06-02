<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\BorrowHistory;
use App\User;

class BookController extends Controller
{
    public function index(){


        $books = Book::paginate(6);

        return view('frontend.book.index', [
            'title' => 'Dasboard My Library',
            'books' => $books,
        ]);
    }

    public function show(Book $book){
        return view('frontend.book.show',[
            'title' => $book->title,
            'book' => $book,
        ]);
    }

    public function borrow(Book $book){

        $user = auth()->user();

        if ($user->borrow()->where('books.id', $book->id)->count() > 0){
            return redirect()->back()->with('toast', 'You have borrowed a book with a title : ' . $book->title);
        }

        $user->borrow()->attach($book);
        $book->decrement('qty');


        return redirect()->back()->with('toast', 'Managed to borrow books');
    }
}