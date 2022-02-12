@extends('layouts.main')
@section('content')
<div class="callout primary">
<div class="row column">
<h1>Upload Portfolio</h1>
<p class="lead">Upload Portfolio Photo </p>
</div>
</div>
<div class="row small-up-2 medium-up-3 large-up-4">

<div class="maindiv">
   <div class="submit-form">
      <form action="{{route('photo.store')}}" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
         @csrf
         <label for="title">Title</label>
         <input type="text" id="title" name="title" placeholder="Your title..">
      
         <label for="description">Description</label>
         <input type="text" id="description" name="description" placeholder="Your description..">
      
         <label for="location">Location</label>
         <input type="text" id="location" name="location" placeholder="Your location..">
      
         <label for="image">Image</label>
         <input type="file" id="image" name="image">

         <input type="hidden" name="gallery_id" value="{{$gallery_id}}">
      
         <input type="submit" value="Submit">
      </form>
      </div>
</div>
</div>
   </div>
@endsection