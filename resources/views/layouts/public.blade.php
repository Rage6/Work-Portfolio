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
      $smallest_number = round($number_of_stars * (2 / 3),0,PHP_ROUND_HALF_DOWN);
      $star_coordinates = [];
    @endphp
    <style>
      @for ($a = 1; $a <= $number_of_stars; $a++)
        @php

          $top_number = random_int(15,90);
          $left_number = random_int(5,90);

          /* This 'for' loop prevents stars from being too close */
          $is_unique = true;
          for ($b = 0; count($star_coordinates) > $b; $b++) {
            $top_diff = abs($top_number - $star_coordinates[$b][0]);
            $left_diff = abs($left_number - $star_coordinates[$b][1]);
            if ($top_diff <= 5 && $left_diff <= 10) {
              $is_unique = false;
            };
          };

        @endphp
        @if ($is_unique == true)
          .starFar{{ $a }} {
            top: calc(var(--vh, "1vh") * {{ $top_number }});
            left: {{ $left_number."%" }};
          }
          @php 
            $star_coordinates[] = [$top_number, $left_number];
          @endphp
        @else
          @php 
            $a = $a - 1;
          @endphp
        @endif
      @endfor
    </style>

    <!-- Scripts -->
    <script src="/js/plain.js" ></script>
    <script>
      window.flashMessage = "{{ session()->has('flashMessage') ? session()->get('flashMessage') : 0 }}"
    </script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app" class="app">
      <!-- @include('layouts.navigator') -->
      <menu-component></menu-component>
      <main>
        @if (session()->has('flashMessage'))
          <flash-component></flash-component>
        @endif
        <!-- The small, randomely-generated, slow stars -->
        @for ($b = 1; $b <= $number_of_stars; $b++)
          <svg class="star starFar starFar{{ $b }} @if ($b > $smallest_number) extraStarFar @endif" role="img" viewBox="0 0 64 64">
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
            L -20 30
            Q -20 30 0 55
            Q 20 80 40 55
            Q 60 30 80 55
            Q 100 80 120 55
            L 100 100 Z" /></path>
        </svg>
        <svg class="mountainRangeClose" role="img" viewBox="0 0 100 100" preserveAspectRatio="none">
          <path d="
            M 0 100
            L 0 40
            Q 20 40 40 55
            Q 60 70 80 55
            Q 100 40 120 55
            L 100 40
            L 100 100 Z" /></path>
        </svg>
        @yield('content')
      </main>
    </div>
</body>
</html>
