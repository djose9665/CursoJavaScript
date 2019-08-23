<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
        @yield('title', 'Nogales')
    </title>
    <style>
      .active a{
        color: green;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    @include('partials/nav')
    @yield('content')

  </body>
</html>
