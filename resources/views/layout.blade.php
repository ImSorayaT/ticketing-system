<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

     
    </head>
    <body class="bg-unit-soft-black text-white  ">
        <div class="min-h-screen flex ">
            <div class="basis-80 bg-[#2b2e2f]  p-6">
                @include('navigation')
            </div>
            <div class="basis-auto grow p-6">
                @yield('content')
            </div>
        </div>
        
        
    </body>
</html>
