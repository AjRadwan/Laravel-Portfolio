 @extends('layouts.main')


 @section('content')
 <div class="callout primary">
    <div class="row column">
    <h1>Portfolio Gallery</h1>
    <p class="lead">Click  For More Details</p>
    </div>
    </div>

@if (session('message'))
   <div class="alert-success">
        {{ session('message') }}
    </div>
@endif

@foreach ($galleries as $gallery)
    <div class="row small-up-2 medium-up-3 large-up-4">
  <div class="column">
      
<a href="{{route('gallery.show', $gallery->id)}}">
    <img src="{{asset($gallery->image)}}" alt="" />   
</a>    
    <h5>{{$gallery->name}}</h5>
    <p>{{$gallery->description}}</p>
    </div>
   </div>
  @endforeach
    
 @endsection