@extends('layouts.templateIndex')
@section('title','registros')
@section('content')
<div class="row">
    <div class="pane panel-primary" style="margin-top:20px">
        @if(session('mensagemCadastro'))
            <div class="alert alert-success alert-dismissible fade in text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <p id="msg">{{session('mensagemCadastro')}}</p>
            </div>
         @endif
        <div class="panel-heading text-center"><h3><strong>PUBLICAÇÕES</strong></h3></div><br/>
        <div class="row lista">
            @foreach ($lista as $item)
                <div class="col-lg-12">
                    <b>TITULO: </b>{{$item->titulo}}<br/>
                    <b>DESCRIÇÃO: </b>{{$item->descricao}}<br/>
                    <b>ANEXO</b><br><img src="{{url("storage/{$item->anexo}")}}"><br/><br/>
                    <button  class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-up"><br>curtir</span></button>
                    <button  class="btn btn-info"><span class="glyphicon glyphicon-comment"><br>comentar</span></button>
                    <button  class="btn btn-success"><span class="glyphicon glyphicon-check"><br>feito</span></button><hr>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
