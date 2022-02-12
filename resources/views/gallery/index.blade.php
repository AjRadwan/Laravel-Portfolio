 @extends('layouts.main')

 @section('content')
 <div class="callout primary">
    <div class="row column">
    <h1>Portfolio Gallery</h1>
    <p class="lead">Click  For More Details</p>
    </div>
    </div>

{{-- @if (session('message'))
   <div class="alert-success">
        {{ session('message') }}
    </div>
@endif --}}
    <div class="row small-up-2 medium-up-3 large-up-4">
 
  <div class="column">
      
<a href="">
    <img class="thumbnail" src="image">    
</a>    
    <h5>name</h5>
        
    </div>
 
  </div>
    
 @endsection