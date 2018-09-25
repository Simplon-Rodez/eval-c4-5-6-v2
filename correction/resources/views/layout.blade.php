<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion de stock</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Gestion de stock</h1>
                <hr class="my-4">
                <h2>@yield('subheader')</h2>
                <p>@yield('subtext')</p>
            @empty($hideHome)
                <hr class="my-4">
                <a href="{{ route('home') }}">Accueil</a>
            @endempty
            </div>
            <div class="content container">
                @yield('content')
            </div>
        </div>
    </body>
</html>
