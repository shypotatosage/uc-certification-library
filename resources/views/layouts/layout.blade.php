<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @yield('title')
        </title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-white text-black dark:bg-gray-900 dark:text-white">
        @include('layouts.navigation')

        @yield('content')
    </body>
</html>