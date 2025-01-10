<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
                <form action="{{ route('logout') }}" method="POST" style="display: inline; padding: 10px 20px; font-size: 16px; cursor: pointer;">
                    @csrf
                    <button type="submit" class="btn-login">Logout</button>
                </form>            
            @endauth
        </div>
    </header>

    <!-- Main Content Section -->
    @yield('content')  <!-- This is where specific page content will be injected -->
    

    <!-- Footer -->
    <footer>
        <div class="foot">
            <p>Copyright © 2024 Nishok, All Rights Reserved</p>
        </div>
    </footer>

</body>
</html>
