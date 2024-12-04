<!-- resources/views/layouts/app.blade.php -->

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
    @elseif(request()->is('blogs/show'))
        <link href="{{ asset('css/blog-show.css') }}" rel="stylesheet">
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
                    <li><a href="">Projects</a></li>
                    <li><a href="{{ route('blogs.index') }}">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <a href="" class="btn-login">Login</a>
        </div>
    </header>

    <!-- Main Content Section -->
    <div class='content'>
        @yield('content')  
    </div>
    


</body>
</html>
