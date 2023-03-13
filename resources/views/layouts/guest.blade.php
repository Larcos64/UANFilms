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
    <body class="font-sans antialiased text-gray-900" style="font-family: 'Montserrat', sans-serif;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: -20px 0 50px;
    margin-top: 20px;">
       
       {{--  
        <div class="flex flex-col items-center justify-center h-screen min-h-screen p-8 pt-6 bg-center bg-no-repeat bg-cover sm:justify-center sm:pt-0" style="backdrop-filter: blur(400px);">--}}
         <img src="/img/fondo.png" alt="" style="position: absolute; z-index: 1; opacity: 60%; backdrop-filter: blur(400px); -webkit-backdrop-filter: blur(10px);
         backdrop-filter: blur(10px);" class="blur-sm">
           {{--}} <div style="z-index: 2; position: relative; margin: 0px 0px;">
                <a href="/">
                    <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
                </a>
            </div> --}}

            <div  style="z-index: 2; position: relative; margin: 50px 0px;" {{-- class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md opacity-100 sm:max-w-md sm:rounded-lg" --}} >
                {{ $slot }}
            </div>
        {{-- </div> --}}
        
    </body>
</html>

