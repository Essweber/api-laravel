<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', env('APP_NAME'))</title>


    </head>
    <body>
        @yield('content')
        {{Config('projet.name')}}
        <footer>
        @yield('footer')
        &copy; copyright {{date('Y')}} &middot;
        @if( ! Route::is('about'))
        <div> <a href="{{route('about')}}">About as</a></div>
        @endif
        </footer>
    </body>

</html>

