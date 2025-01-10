
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">

    @if(request()->is('blogs'))
        <link href="{{ asset('css/blog-index.css') }}" rel="stylesheet">
    @elseif(request()->is('blogs/create'))
        <link href="{{ asset('css/blog-create.css') }}" rel="stylesheet">
    @elseif(request()->is('blogs/*'))
        <link href="{{ asset('css/blog-show.css') }}" rel="stylesheet">
    
    @elseif(request()->is('projects'))
        <link href="{{ asset('css/project-index.css') }}" rel="stylesheet">
    
    @endif
    <style>
        .content{
            margin-top: 90px;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="navigation">
            <h1 class="logo">Portfolio</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="{{ route('projects.index') }}">Projects</a></li>
                    <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            @guest
                <a href="{{ route('login') }}" class="btn-login">Login</a>
            @endguest
            @auth
                <form action="{{ route('logout') }}" method="POST" style="display: inline; cursor: pointer;">
                    @csrf
                    <button type="submit" class="btn-login">Logout</button>
                </form>            
            @endauth
        </div>
    </header>

    <!-- Main Content Section -->
    <div class='content'>
        @yield('content')  
    </div>
    


</body>
</html>
