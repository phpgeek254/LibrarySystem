<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
  
    public function index()
    {
        $books = Book::latest()->paginate(12);
        return view('books.index', compact('books'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $file_url = $this->get_file_url($request);
        Book::create(array_merge($request->except('file'), $file_url));
        return redirect()->back()->withMessage('Books added successfully');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        //
    }

    public function update(Request $request, Book $book)
    {
        $file_url = $this->get_file_url($request);
        $book->update(array_merge($request->except('file'), $file_url));
        return redirect()->back()->withMessage('book updated successfully');
    }

    public function destroy(Book $book)
    {
        // Delete all the images 
        foreach ($book->images as $image) {
            if(file_exists(public_path($image->url))) {
                unlink(public_path($image->url));  
            }
        }
        // Delete book
        $book->delete();
        return redirect()->route('books.index')->withMessage('Book deleted Successfully');
    }

    /**
     * @param Request $request
     * @return array|null|string
     */
    public function get_file_url(Request $request)
    {
        $file_url = [];
        $destination = 'uploaded_books/';

        if ( $file = $request->file('file')) {
            // upload file.
            $file_name = uniqid().$file->getClientOriginalName();
            $file_url = $file->move($destination, $file_name) ?  $destination.$file_name : null;
        }

        $file_url = ['file_url' => $file_url];
        return $file_url;
    }
}
