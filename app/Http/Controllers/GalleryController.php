<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    
    public function index()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('galleries.index', compact('galleries'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Gallery::create($request->all());
        return redirect()->back()->withMessage('Gallery created successfully');
    }

    public function show(Gallery $gallery)
    {
        return view('galleries.show', compact('gallery'));
    }

    public function edit(Gallery $gallery)
    {
        //
    }

    
    public function update(Request $request, Gallery $gallery)
    {
        $gallery->update($request->all());
        return redirect()->back()->withMessage('Gallery data saved.');
    }

    
    public function destroy(Gallery $gallery)
    {
        // Delete all the images
        foreach ($gallery->images as $image) {
            unlink(file_exists(public_path($image->url)) ? : null);
        }
        // Delete the gallery.
        $gallery->delete();
    }
}
