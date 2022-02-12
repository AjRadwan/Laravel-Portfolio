<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Gallery;
use App\Models\Photo;
use Illuminate\Http\Request;

class GalleryController extends Controller{
   
    public function index(){
        $galleries = Gallery::all();
        return view('gallery.index', compact('galleries'));
    }

 
    public function create(){
         return view('gallery.create');
    }

  
    public function store(Request $request){
       $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'required | image',
         ]);

        $name = $request->input('name');
        $description = $request->input('description');
        $user_id = Auth::user()->id;
        // File Upload
    $image = 'storage/' . $request->file('image')->store('GalleryImages', 'public');

    $gallery = new Gallery();
    $gallery->name = $name;
    $gallery->description = $description;
    $gallery->user_id = $user_id;
    $gallery->image = $image;
    $gallery->save();
    return redirect()->back()->with('message', "Gallery Created Successfully");

    }

    
    public function show(Gallery $gallery){
           return view('gallery.show', compact('gallery'));    
    }

   
    public function edit(Gallery $gallery){
        //
    }

 
    public function update(Request $request, Gallery $gallery){
        //
    }

 
    public function destroy(Gallery $gallery){
        //
    }
}
