<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller{
   
    public function index(){
        return view('gallery.index');
    }

 
    public function create(){
         return view('gallery.create');
    }

  
    public function store(Request $request){
       $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'required | imagePath',
         ]);

        $name = $request->input('name');
        $description = $request->input('description');
        $user_id = Auth::user()->id;
        // File Upload
    $imagePath = 'storage/' . $request->file('imagePath')->store('GalleryImages', 'public');

    $gallery = new Gallery();
    $gallery->name = $name;
    $gallery->description = $description;
    $gallery->user_id = $user_id;
    $gallery->imagePath = $imagePath;
    $gallery->save();
    return redirect()->back()->with('message', "Gallery Created Successfully");

    }

    
    public function show(Gallery $gallery){
         return view('gallery.show');
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
