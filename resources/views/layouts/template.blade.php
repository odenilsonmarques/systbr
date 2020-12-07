<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/styleHeader.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/styleBody.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/styleFooter.css')}}">
    </head>
    <body>
        <header> 
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                          <a class="navbar-brand" href="{{route('lista.list')}}">SystRB</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{route('lista.list')}}"><span class="glyphicon glyphicon-th"></span> Publicações </a></li>
                            <li><a href="{{route('minhaLista.myList')}}"><span class="glyphicon glyphicon-th-list"></span> Minhas publicações</a></li>
                            <li><a href="{{route('cadastro.add')}}"><span class="glyphicon glyphicon-plus"></span> Nova publicação</a></li>
                            <li class="dropdown">
                                <a  class="dropdown-toggle" data-toggle="dropdown" href="#" >
                                    Olá, {{ Auth::user()->name }} <span class="glyphicon glyphicon-user"></span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('logout')}}"
                                        onclick="event.preventDefault(); 
                                        document.getElementById('logout-form').submit();">
                                        <span class="glyphicon glyphicon-off"></span> {{ __('Sair')}} 
                                    </a></li>
                                    <form id="logout-form" action="{{route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav><br/><br/>
        </header>
        <article>
            <div class="container contentBody">
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
