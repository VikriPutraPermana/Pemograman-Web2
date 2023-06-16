<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Import model Book
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.book.index', [
            'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi form input
        $validated = $request->validate([
            'title' => 'required|min:5|max:24',
            'isbn' => 'required|integer',
            'stok' => 'required|integer',

        ]);

        Book::create($validated);
        return redirect('dashboard/book');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Mendapatkan data berdasarkan ID
        $book = Book::find($id);
        return view("admin.book.show", [
            'book' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mendapatkan data berdasarkan ID
        $book = Book::find($id);
        return view("admin.book.edit", [
            'book' => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Mendapatkan data berdasarkan ID
        $book = Book::find($id);

         // Validasi form input
         $validated = $request->validate([
            'title' => 'required|min:5|max:24',
            'isbn' => 'required|integer',
            'stok' => 'required|integer',

        ]);

        //Update Data
        $book->title = $request->input('title');
        $book->isbn = $request->input('isbn');
        $book->stok = $request->input('stok');
        $book->save();

        return redirect('/dashboard/book')->with('success', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Mencari data berdasarkan ID
        $book = Book::find($id);

        // Hapus data berdasarkan ID
        $book->delete();

        return redirect('/dashboard/book');

    }
}
