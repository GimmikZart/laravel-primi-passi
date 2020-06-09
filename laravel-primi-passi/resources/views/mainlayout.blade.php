<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
        <script type="text/javascript" src="js/app.js">

        </script>
    </head>
    <body>
      <header>
        @include("navbar")
        @include ("header")
      </header>
      <main>
        @yield ("contenutoDinamico")
      </main>
      <footer>
        @include ("footer")
      </footer>

    </body>
</html>
