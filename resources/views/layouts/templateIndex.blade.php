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
        <link rel="stylesheet" href="{{('assets/css/styleFooter.css')}}">
    </head>
    <body>
        <header> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <img src="{{('assets/img/brasao.png')}}" style="margin-width:none;height:none"><hr>
                    </div>
                </div>   
            </div>
        </header>
        <article>
            <div class="container">
                @yield('content')
            </div>
        </article>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center inforFooter">
                        Todos os direito reservados || Prefeitura de São Luís - MA</a><br><br>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="{{('assets/js/jquery-3.1.1.min.js')}}"></script>
        <script type="text/javascript" src="{{('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>
