<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('index',['books' => $books]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
       

        $book = new Book;
        $book -> title= $request -> title;
        $book -> author_name= $request -> author_name;
        $book -> isbn= $request -> isbn;
        $book -> published_year= $request -> published_year;

        $book -> save();
        return redirect()->route('books.index');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('edit', ['book'=> $book]);
    }

    public function update(Request $request, $id)
    {


        $book  = Book::find($id);

        $book -> title = $request->title;
        $book -> author_name = $request->author_name;
        $book -> isbn= $request->isbn;
        $book -> published_year= $request->published_year;

        $book -> save();
        return redirect()->route('books.index');
    }

    public function show($book, $category = null)
    {
        return view('show', compact('book', 'category'));
    }


    public function destroy($id){
        $book = Book::find($id);
        $book->delete();

        return redirect()->route('books.index');
    }
}
