@extends('layouts.main')

@section('content')
<div class="callout primary">
<div class="row column">
<h1>Create Portfolio Gallery</h1>
<p class="lead">Upload Portfolio gallery</p>
</div>
</div>
    
<div class="row small-up-2 medium-up-3 large-up-4">
  @include('include.flash-message')
<div class="maindiv">
   <div class="submit-form">
      <form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <label for="name">Name</label>
         <input type="text" id="name" name="name" placeholder="Your name..">
         @error('name')
         <strong style="color: red; font-weight: bold; margin-bottom: 20px;"> {{ $message }}</strong>
        @enderror
      
         <label for="description">Description</label>
         <input type="text" id="description" name="description" placeholder="Your description..">
         @error('description')
         <strong style="color: red; font-weight: bold; margin-bottom: 20px;"> {{ $message }}</strong>
        @enderror
      
         <label for="image">Image</label>
         <input type="file" id="cover_img" name="image">
         @error('image')
         <strong style="color: red; font-weight: bold; margin-bottom: 20px;"> {{ $message }}</strong>
        @enderror
      
         <input type="submit" value="Submit">
      </form>
      </div>
</div>
</div>
   </div>
@endsection