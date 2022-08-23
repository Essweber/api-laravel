
@extends('base')

<!-- @section('title', 'about us | '. Config('app.title')) -->
<!-- @section('title')
{{env('NAME')}}
@stop -->

@section('content')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
          <h1>A propos de nous</h1>
          <p>Buld with &hearts; by Gibert fullstack !!!</p>
            <p><a href="{{route('home')}}">revenir à la page d'accueil</a></p>
            @section('footer')
          @stop