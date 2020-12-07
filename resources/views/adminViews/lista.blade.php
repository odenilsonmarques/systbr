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
                <b>BAIRRO: </b>{{$item->bairro}} <br/>
                <b>RUA: </b>{{$item->rua}}<br/>
                <b>DESCRIÇÃO: </b>{{$item->descricao}}<br/>
                <b>DATA E HORA: </b>{{Carbon\Carbon::parse($item ->data_publicacao)->format('d/m/Y \A\S H:i:s')}}<br/>
                <b>ANEXO:</b><br><img src="{{url("storage/{$item->anexo}")}}" class="img-responsive"><br/><br/>
                <button  class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-up"><br>curtir</span></button>
                <button  class="btn btn-info"><span class="glyphicon glyphicon-comment" data-toggle="modal" data-target="#myModal"><br>comentar</span></button>    
                <button  class="btn btn-success"><span class="glyphicon glyphicon-check"><br>feito</span></button><hr>
            @endforeach
        </div>
    </div>   
    
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    @csrf
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="descricao" class="text-primary">Comentário</label><br/>
                                    <textarea name="descricao" id="descricao" value="{{old('descricao')}}" rows="4" class="form-control" placeholder="Comente aqui"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-lg-12 glyphiconIcon">
                                <button type="submit" class="btn btn-success"><strong>PUBLICAR</strong> <span class="glyphicon glyphicon-ok"></span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
  
