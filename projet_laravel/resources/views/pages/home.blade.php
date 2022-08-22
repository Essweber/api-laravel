<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mon app laravel</title>


    </head>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
          <h1>hollo every from Togo !!!!</h1>
          <p>current time : {{date('d/m/y h:i A')}} .</p>
          <footer>&copy; copyright {{date('Y')}} &middot; <a href="/about-us">About as</a></footer>
    </body>
   
</html>
