<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Application')</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <header>
        <h1>@yield('head', 'PHP / Laravel')</h1>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <p>@yield('footer')</p>
    </footer>
</body>
</html>