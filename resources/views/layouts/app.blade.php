<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            @yield('title')
        </title>

        @livewireStyles

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-white text-black dark:bg-gray-900 dark:text-white">
        @include('layouts.navigation')

        @yield('content')

        @livewireScripts
    </body>
</html>