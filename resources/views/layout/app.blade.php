<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
     @vite('resources/css/app.css')
</head>
<body>
    <nav class="flex justify-end bg-gray-200 py-2 px-4">
        <ul class="flex gap-5">
            <a href="/home"><li>Home</li></a>
            <a href="/about"><li>About</li></a>
            <a href="/contact"><li>Contact Us</li></a>
            <a href="/services"><li>Services</li></a>
            
        </ul>
    </nav>

    <div class=" min-h-screen p-5">
        @yield('content')
    </div>

    <footer>
        <p>All Right Reserved 2026</p>
    </footer>
</body>
</html>