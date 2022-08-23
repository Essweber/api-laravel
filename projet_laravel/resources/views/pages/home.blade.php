
@extends('base')

@section('title',''. config('app.title'))

@section('content')

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
          <h1>hello every from Togo !!!!</h1>
          <p>current time : {{date('d/m/y h:i A')}} .</p>
        
          <!-- <p><b>Variable d'environement APP_URL :</b> {{env('APP_URL')}}</p>
          <p><b>Variable d'environement NOM :</b> {{env('NAME')}}</p> -->

          @endsection
          @section('footer')
          <div> <a href="{{route('about')}}">About as</a></div>
          @endsection