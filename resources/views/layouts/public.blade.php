<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Nicholas Vogt') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Whisper">

    <!-- Style -->
    <link rel="stylesheet" href="/css/app.css">
    <!-- Star generator -->
    @php
      $number_of_stars = 30;
    @endphp
    <style>
      @for ($a = 1; $a <= $number_of_stars; $a++)
        @php
          $top_number = random_int(15,90);
          $left_number = random_int(5,90);
        @endphp
        .starFar{{ $a }} {
          top: {{ $top_number."vh" }};
          left: {{ $left_number."%" }};
        }
      @endfor
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app" class="app">
      @include('layouts.navigator')
      <main>

        <!-- The small, randomely-generated, slow stars -->
        @for ($b = 1; $b <= $number_of_stars; $b++)
          <svg class="star starFar starFar{{ $b }}" role="img" viewBox="0 0 64 64">
            <path d="M37.834 34.414L62 32l-24.166-2.417l15.38-18.797l-18.798 15.381L32 2l-2.417 24.167l-18.797-15.381l15.38 18.797L2 32l24.166 2.414l-15.38 18.799l18.797-15.379L32 62l2.416-24.166l18.798 15.379z"></path>
          </svg>
        @endfor

        <!-- The five large, faster stars -->
        @for ($i = 1; $i <= 5; $i++)
          <svg
            class="star starClose star{{ strval($i) }}"
            role="img"
            viewBox="0 0 64 64">
              <path
                d="M37.834 34.414L62 32l-24.166-2.417l15.38-18.797l-18.798 15.381L32 2l-2.417 24.167l-18.797-15.381l15.38 18.797L2 32l24.166 2.414l-15.38 18.799l18.797-15.379L32 62l2.416-24.166l18.798 15.379z"></path>
          </svg>
        @endfor

        <svg class="mountainRangeFar" role="img" viewBox="0 0 100 100" preserveAspectRatio="none">
          <path d="
            M 0 100
            L 0 55
            Q 15 05 25 30
            Q 30 55 50 55
            Q 65 05 75 30
            Q 80 55 100 30
            L 100 30
            L 100 100 Z" /></path>
        </svg>
        <svg class="mountainRangeClose" role="img" viewBox="0 0 100 100" preserveAspectRatio="none">
          <path d="
            M 0 100
            L 0 55
            Q 15 05 25 30
            Q 30 55 50 55
            Q 65 05 75 30
            Q 80 55 100 30
            L 100 30
            L 100 100 Z" /></path>
        </svg>
        <!-- money > not much money due to dropping list of members
        school > lack of interest from students, staff
        Post 367 -->
        @yield('content')
      </main>
    </div>
</body>
</html>
