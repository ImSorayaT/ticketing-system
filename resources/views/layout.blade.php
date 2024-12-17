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
        <div class=" flex">
        
            @auth()
                <div class="basis-80 bg-sidebar min-h-screen pt-5 p-10">
                    @include('navigation')
                </div>
            @endauth
            <div class="basis-auto grow">
                @include('navigation_top')
                <div class="p-6">
                    @yield('content')
                </div>
            </div>
        </div>
        
        
    </body>
</html>
