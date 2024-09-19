<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - My Laravel Site</title>
    <!-- Include your CSS and meta tags here -->
</head>
<body>
    <nav>
        <!-- Navigation bar -->
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <!-- Include your JS here -->
</body>
</html>
