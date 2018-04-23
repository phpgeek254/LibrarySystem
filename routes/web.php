<?php

// Home page
use App\Book;
use App\Gallery;

Route::get('/', function () {
	$books = Book::latest()->take(4)->get();
    $gallery = Gallery::inRandomOrder()->first();
    return view('pages.home', compact('gallery', 'books'));
});
//contact page
Route::get('/contact', function () {
    return view('pages.contact');
});
//about page
Route::get('/about', function () {
    return view('pages.about');
});

Route::resource('books', 'BookController');
Route::resource('galleries', 'GalleryController');
Route::resource('categories', 'CategoryController');
Route::resource('Auth', 'UserController');
Route::resource('borrowed-books', 'BorrowingController');
Route::resource('upload-images', 'ImageController');
Route::resource('users', 'UserController');

Auth::routes();
