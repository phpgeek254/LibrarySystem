<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(12);
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->back()->withMessage('Category created Successfully');
    }

    public function show(Category $category)
    {
        $books = Book::latest()->where('category_id', $category->id)->get();
        return view('categories.show', compact('category', 'books'));
    }

    public function edit(Category $category)
    {
        //
    }

   
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->back()->withMessage('Category successfully saved');
    }

    
    public function destroy(Category $category)
    {
        // Delete all the images
        foreach ($category->images as $image) {
            if(file_exists(public_path($image->url))) {
                unlink(public_path($image->url));
            }
        }
        $category->delete();
    }
}
