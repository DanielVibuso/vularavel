<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Simulador</title>
        
        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div id="app">
            <simula-component/>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
