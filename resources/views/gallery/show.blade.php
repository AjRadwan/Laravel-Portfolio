@extends('layouts.main')

@section('content')
<div class="callout primary">
   <div class="row column">
   <h1>{{$gallery->name}}</h1>
   <p class="lead">{{$gallery->description}}</p>
    
   <a class="button" href="{{route('photo.create', $gallery->id)}}">Upload Portfolio</a>
   </div>
   </div>
  
@endsection