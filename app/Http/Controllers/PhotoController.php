<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller{
   
    public function index(){
       return view('photo.index');
    }

 
    public function create(){
        return view('photo.create');
    }

   
    public function store(Request $request){
        //
    }

   
    public function show(Photo $photo){
       return view('photo.show');
    }

    

    public function edit(Photo $photo){
        //
    }

   
    public function update(Request $request, Photo $photo){
        //
    }

    
    public function destroy(Photo $photo){
        //
    }
}
