@extends('layouts.template')
@section('title','minhas publicações')
@section('content')
<div class="row lista">
    <div class="col-lg-12">
        <div class="pane panel-primary" style="margin-top:20px">
            @if(session('mensagemExclusao'))
                <div class="alert alert-success alert-dismissible fade in text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p id="msg">{{session('mensagemExclusao')}}</p>
                </div>
            @endif
            @if(session('mensagemEdicao'))
                <div class="alert alert-success alert-dismissible fade in text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p id="msg">{{session('mensagemEdicao')}}</p>
                </div>
            @endif
            @foreach ($registros as $registro)
                <b>TITULO: </b>{{$registro->titulo}}<br/>
                <b>DESCRIÇÃO: </b>{{$registro->descricao}}<br/>
                <b>ANEXO</b><br><img src="{{url("storage/{$registro->anexo}")}}"><br/><br/>
                <a href="{{route('editaMinhaLista.edit',[$registro->id])}}" class="btn btn-primary btn-sm">Editar</a>
                <a href="{{route('deletaMinhaPublicacao.del',[$registro->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('CONFIRMAR EXCLUSÃO?')">Excluir</a><hr>
            @endforeach
        </div>
    </div>
</div>
@endsection