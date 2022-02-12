<?php

namespace App\Http\Controllers;

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
        //
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
