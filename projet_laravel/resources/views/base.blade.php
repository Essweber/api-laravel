<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mon app laravel</title>


    </head>
    <body>
        @yield('content')

        <footer>
            &copy; copyright {{date('Y')}} &middot;
            <a href="/about-us">About as</a>
        </footer>
    </body>
   
</html>











<!-- 

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html> -->