<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{('assets/css/styleHeader.css')}}">
        <link rel="stylesheet" href="{{('assets/css/styleBody.css')}}">
        <link rel="stylesheet" href="{{('assets/css/estiloFooter.css')}}">
    </head>
    <body>
        <header>      
        </header>
        <article>
            <div class="container">
                @yield('content')
            </div>
        </article>
        <footer>
        </footer>
        <script type="text/javascript" src="{{('assets/js/jquery-3.1.1.min.js')}}"></script>
        <script type="text/javascript" src="{{('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>
