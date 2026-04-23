<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rajut UMKM - Namonic')</title>
    
    <link rel="stylesheet" href="{{ asset('styles/style_index.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900">

    <x-navbar /> 

    <main>
        @yield('content') [cite: 2]
    </main>

    <x-footer /> 

</body>
</html>