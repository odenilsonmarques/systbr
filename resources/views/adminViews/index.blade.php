@extends('layouts.templateIndex')
@section('title','index')
@section('content')
    <div class="row">
        <div class="col-lg-4 text-center operacaoUsuario">
            <a href="#">
                <h3><strong class="texto">Quero me Cadastrar</strong></h3>
                <img src="{{('assets/img/user2.png')}}"><br/><br/><br/>
            </a>
            </a>
        </div>

        <div class="col-lg-4 text-center operacaoTapaBuraco">
            <h3><strong class="texto">Operação - Tapa Buraco</strong></h3>
            <img src="{{('assets/img/worker.png')}}"><br/><br/><br/>
            </a>
        </div>

        <div class="col-lg-4 text-center operacaoUsuario">
            <a href="#">
                <h3><strong class="texto">Sou Cadastrado</strong></h3>
                <img src="{{('assets/img/users3.png')}}"><br/><br/><br/>
            </a>
            </a>
        </div>
    </div>
@endsection
