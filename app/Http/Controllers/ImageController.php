<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    protected $destination = 'uploaded_images/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $file_name = null;
        if ($file = $request->file('file'))
        {
            $file_name = uniqid().$file->getClientOriginalName();
            $file->move($this->destination, $file_name);
        }

        // ToDo: find and a way to make a magazine page.



        $image = Image::create([
            'imageble_id'=> (int)$request->imageble_id,
            'imageble_type'=> "App\\" . ucfirst($request->imageble_type),
            'url'=> $this->destination.$file_name,
        ]);

        if ($request->imageble_type == 'User') {
            // Create a new magazine page.
            $user = User::find(Auth::id());
            $user->avatar = $image->url;
            $user->save();

        }
        return response(Image::find($image->id), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  integer  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image = Image::find($id);
        return view('uploaded_images.index', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Image $image, $id)
    {
        // delete images
        $image = Image::find($id);
        $file = public_path($image->url);
        if ($request->isXmlHttpRequest()) {
            if (file_exists($file)) {
//                return ['msg' =>'file found', 'file' => $image];
                unlink($file);
                $image->delete();
                return $image;
            }

        }

        if (file_exists($file)){
            unlink($file);
            $image->delete();
            return redirect()->back()->withMessage('Image removed');
        } else {
            $image->delete();
            return redirect()->back()->withMessage('Image removed not unlinked');
        }
    }
}