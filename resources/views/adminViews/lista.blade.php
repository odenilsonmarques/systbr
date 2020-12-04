@extends('layouts.template')
@section('title','registros')
@section('content')
<div class="row lista">
    <div class="col-lg-12">
        <div class="pane panel-primary" style="margin-top:20px">
            @if(session('mensagemCadastro'))
                <div class="alert alert-success alert-dismissible fade in text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p id="msg">{{session('mensagemCadastro')}}</p>
                </div>
            @endif
            
            @foreach ($lista as $item)
                <b>TITULO: </b>{{$item->titulo}}<br/>
                <b>DESCRIÇÃO: </b>{{$item->descricao}}<br/>
                <b>ANEXO</b><br><img src="{{url("storage/{$item->anexo}")}}"><br/><br/>
                <button  class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-up"><br>curtir</span></button>
                <button  class="btn btn-info"><span class="glyphicon glyphicon-comment"><br>comentar</span></button>
                <button  class="btn btn-success"><span class="glyphicon glyphicon-check"><br>feito</span></button><hr>
            @endforeach
        </div>
    </div>
</div>
@endsection
