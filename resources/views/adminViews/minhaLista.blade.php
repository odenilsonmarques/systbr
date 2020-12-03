@extends('layouts.templateIndex')
@section('title','minhas publicações')
@section('content')
<div class="row">
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
        <div class="panel-heading text-center"><h3><strong>PUBLICAÇÕES</strong></h3></div><br/>
        <div class="row lista">
            @foreach ($minhaLista as $item)
                <div class="col-lg-12">
                    <b>TITULO: </b>{{$item->titulo}}<br/>
                    <b>DESCRIÇÃO: </b>{{$item->descricao}}<br/>
                    <b>ANEXO</b><br><img src="{{url("storage/{$item->anexo}")}}"><br/><br/>
                    <a href="{{route('editaMinhaLista.edit',[$item->id])}}" class="btn btn-primary btn-sm">Editar</a>
                    <a href="{{route('deletaMinhaPublicacao.del',[$item->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('CONFIRMAR EXCLUSÃO?')">Excluir</a><hr>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection