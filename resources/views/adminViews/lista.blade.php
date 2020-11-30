@extends('layouts.templateIndex')
@section('title','registros')
@section('content')
<div class="row">
    <div class="pane panel-primary" style="margin-top:20px">
        <div class="panel-heading text-center" style="border-radius:5px"><h3><strong>Dados do Registro</strong></h3></div><br/>
            <div class="col-12-lg">
                <div class="table-responsive">  
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>TITULO <span class="glyphicon glyphicon-subtitles"></span></th>
                                <th>DESCRIÇÃO <span class="glyphicon glyphicon-th-list"></span></th>
                                <th>ANEXO <span class="glyphicon glyphicon-paperclip"></span></th>
                                <th>AÇÃO</th>
                            </tr>
                        </thead>
                        @foreach ($lista as $item)
                            <tr>
                                <td>{{$item->titulo}}</td>
                                <td>{{$item->descricao}}</td>
                                @if($item->anexo)
                                    <td><img src="{{url("storage/{$item->anexo}")}}" ></td>
                                @endif
                                <td>
                                    <a href="#" class="btn-primary btn-sm">Editar</a>
                                    <a href="#" onclick="return confirm('DESEJA CONFIRMAR A EXCLUSÃO ?')" class="btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection