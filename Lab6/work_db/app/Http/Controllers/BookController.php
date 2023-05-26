<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\PublishHouse;


class BookController extends Controller
{

    public function index() {
        $books = Book::all();
        return view('books', ['books' => $books]);
    }

    public function show($id){
        $book = Book::find($id);
        $author = $book->author;
        $publishHouses = $book->publishHouses;
        return view('welcome', ['book'=>$book, 'author'=>$author, 'publishHouses' =>$publishHouses ]);
    }

    public function showAuthor($id){
        $author = Author::find($id);
        $books = $author->books;
        return view('author', ['books'=>$books, 'author'=>$author]);
    }

    public function showPublishHouses($id){
        $publishHouse = PublishHouse::find($id);
        $books = $publishHouse->books;
        return view('publishHouse', ['books'=>$books, 'publishHouse'=>$publishHouse]);
    }

    public function addBook(){
        $publishHouses = PublishHouse::orderBy('title', 'asc')->get();
        $authors = Author::orderBy('surname', 'asc')->get();
        return view('addBook', ['publishHouses' => $publishHouses, 'authors' => $authors]);
    }

    public function store(Request $request){
        $book = new Book();
        $book->title = $request->input('title');
        $book->year = $request->input('year');
        $book->description = $request->input('description');
        $book->author_id = $request->input('author');
        $book->image = $request->input('image');
        $book->save();
        $publishHousesId = json_decode($request->input('publishHouse'));
        $book->publishHouses()->attach($publishHousesId);
    }
}
