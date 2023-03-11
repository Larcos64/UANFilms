<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased ">
        
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0{{--  bg-gray-800  --}}{{-- bg-[url('https://images.pexels.com/photos/10147530/pexels-photo-10147530.jpeg?cs=srgb&dl=pexels-nikita-grishin-10147530.jpg&fm=jpg')]  --}} bg-no-repeat bg-cover bg-center h-screen
        p-8  justify-center" style="backdrop-filter: blur(400px);">
         <img src="/img/fondo.png" alt="" style="position: absolute; z-index: 1; opacity: 60%; backdrop-filter: blur(400px); -webkit-backdrop-filter: blur(10px);
         backdrop-filter: blur(10px);" class="blur-sm">
            <div style="z-index: 2; position: relative; margin: 0px 0px;">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div style="z-index: 2; position: relative; margin: 50px 0px;" class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg opacity-100">
                {{ $slot }}
            </div>
        </div>
        
    </body>
</html>
