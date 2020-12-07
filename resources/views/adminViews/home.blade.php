@extends('layouts.templateIndex')
@section('title','Home')
@section('content')
    <div class="row">
        <div class="col-lg-4 text-center operacaoUsuario">
            <a href="{{route('register')}}">
                <h3><strong class="texto">QUERO ME CADASTRAR</strong></h3>
                <img src="{{('assets/img/users3.png')}}"><br/><br/><br/>
            </a>
        </div>
        <div class="col-lg-4 text-center operacaoTapaBuraco">
            <h3><strong class="texto">OPERAÇÃO</strong></h3>
            <img src="{{('assets/img/worker.png')}}">
            <h3><strong class="texto">TAPA BURACO</strong></h3><br><br>
        </div>
        <div class="col-lg-4 text-center operacaoUsuario">
            <a href="{{route('login')}}">
                <h3><strong class="texto">SOU CADASTRADO</strong></h3>
                <img src="{{('assets/img/user2.png')}}"><br/><br/><br/>
            </a>
        </div>
    </div>
@endsection
