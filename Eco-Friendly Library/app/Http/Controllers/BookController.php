<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books', compact('books'));
    }

    public function manage(){
        $books = Book::all();
        return view('books/manage', compact('books'));
    }

    public function add(){
        return view('books/add');
    }

    public function store(Request $request){
        // VALIDATION
        $request->validate([
            'title' => 'required|string|min:5|max:20',
            'author' => 'required|string|min:5|max:20',
            'publication_year' => 'required|integer|min:2000|max:2021',
            'number_of_pages' => 'required|integer|min:1',
        ]);


        // ADD NEW BOOK
        Book::create([
            'judul' => $request->title,
            'penulis' => $request->author,
            'tahun_terbit' => $request->publication_year,
            'jumlah_halaman' => $request->number_of_pages,
        ]);

        return redirect('/books/manage')->with('success', 'New book added!');
    }


    public function edit($id){
        $book = Book::findOrFail($id);
        return view ('books/edit', compact('book'));
    }

    public function update(Request $request, $id){
        // VALIDATION
        $request->validate([
            'title' => 'required|string|min:5|max:20',
            'author' => 'required|string|min:5|max:20',
            'publication_year' => 'required|integer|min:2000|max:2021',
            'number_of_pages' => 'required|integer|min:1',
        ]);

        // UPDATE BOOK
        $book = Book::findOrFail($id);
        $book->update([
            'judul' => $request->title,
            'penulis' => $request->author,
            'tahun_terbit' => $request->publication_year,
            'jumlah_halaman' => $request->number_of_pages,
        ]);

        return redirect('/books/manage')->with('success', 'Book edited!');
    }

    public function destroy($id){
        // DELETE BOOK
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('/books/manage')->with('success', 'Book deleted!');
    }
}
