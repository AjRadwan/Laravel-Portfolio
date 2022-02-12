<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Portfolio | Welcome</title>

<link href="{{asset('asset/css/foundation.css')}}" rel="stylesheet" media="all">
<link href="{{asset('asset/css/main.css')}}" rel="stylesheet" media="all">
</head>
<body>

    <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

<div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
<div class="row column">
<br>
<img class="thumbnail" src="http://placehold.it/550x350">
<h5 class="menu-title">Main Menu</h5>
<ul class="side-nav mynav">
    <li><a href="/">Home</a></li>
    <li><a href="{{route('gallery.create')}}">Create Gallery</a></li>
    <li><a href="{{route('login')}}">Login</a></li>
    <li><a href="{{route('register')}}">Register</a></li>
    <li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
    </li>
    
</ul>
</div>
</div>

    <div class="off-canvas-content" data-off-canvas-content>
    <div class="title-bar hide-for-large">
    <div class="title-bar-left">
    <button class="menu-icon" type="button" data-open="my-info"></button>
    <span class="title-bar-title">Anowar J Radwan</span>
    </div>
    </div>
 
    @yield('content')

<hr>
 
    </div>
</div>
</div>

<script src="{{asset('asset/vendor/jquery.js')}}"></script>
<script src="{{asset('asset/vendor/foundation.js')}}"></script>
<script>
$(document).foundation();
</script>
</body>
</html>


