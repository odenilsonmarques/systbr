@extends('layouts.templateIndex')
@section('title','publicar')
@section('content')
    <div class="row">
        <div class="pane panel-primary" style="margin-top:20px">
            <div class="panel-heading text-center" style="border-radius:5px"><h3><strong>CADASTRO DE PUBLICAÇÃO</strong></h3></div><br/>
            <div class="col-12-lg">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{$error}}<br/>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="titulo" class="text-primary">TITULO</label><br/>
                                <input type="text" name="titulo" value="{{old('titulo')}}" class="form-control"  autofocus="" placeholder="Digite um titulo">
                            </div>
                        </div>
                    </div>   
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="descricao" class="text-primary">DESCRIÇÃO</label><br/>
                                <textarea name="descricao" id="descricao" value="{{old('descricao')}}" rows="4" class="form-control" placeholder="Digite uma descrição">{{old('descricao')}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="anexo" class="text-primary">ANEXO</label><br/>
                                <input type="file" name="anexo" value="{{old('anexo')}}" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-lg-12 glyphiconIcon">
                            <a href="" class="btn btn-danger"><strong>CANCELAR</strong> <span class="glyphicon glyphicon-remove"></span></a>
                            <button type="submit" class="btn btn-success"><strong>PUBLICAR</strong> <span class="glyphicon glyphicon-ok"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
@endsection

