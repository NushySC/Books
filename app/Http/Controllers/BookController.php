<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use App\Publisher; // REMEMBER TO PUT THIS STUFF HERE

class BookController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth')->except('index');
    }


    public function index()
    {
        $books = Book::take(100)->get();

        return view('books/index', compact(['books']));
    }


    public function create()

    {   
        $publishers = Publisher::all();
        return view('books/create', compact(['publishers']));
    }


    public function store(Request $request)
    {
//        $book = new Book;
//
//        $book->title = $request->title;
//        $book->authors = $request->authors;
//        $book->image = $request->image;
//
//        $book->save(); same but longer, use the below method

        $data = $request->all();

        $book = Book::create($data);

        return redirect(action('BookController@index'));
    }


    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $publishers = Publisher::all();

        return view('books.edit', compact('book', 'publishers'));
    }


    public function update($id, Request $request)
    {



        $book = Book::findOrFail($id);


//        $book->title = $request->title;
//        $book->authors = $request->authors;
//        $book->image = $request->image;
//
//        $book->save();

        $data = $request->all();

        $book->update($data);

        return redirect(action('BookController@index'));
    }

}
