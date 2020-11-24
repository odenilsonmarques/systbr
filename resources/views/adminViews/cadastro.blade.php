@extends('layouts.template')
@section('title','publicar')
@section('content')
    <div class="row">
        <div class="col-12-lg">
            <div class="pane panel-primary">
                <div class="panel-heading text-center"><h3><strong>Dados do Registro</strong></h3></div>
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="titulo" class="text-primary">Titulo</label><br/>
                                    <input type="text" name="titulo" value="{{old('titulo')}}" class="form-control"  autofocus="" placeholder="Digite um titulo">
                                </div>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="descricao" class="text-primary">Descrição</label><br/>
                                    <textarea name="descricao" id="descricao" value="{{old('descricao')}}" rows="4" class="form-control" placeholder="Digite uma descrição"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="anexoUm" class="text-primary">Anexo Um</label><br/>
                                    <input type="file" name="anexoUm" value="{{old('anexoUm')}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="anexoDois" class="text-primary">Anexo Dois</label><br/>
                                    <input type="file" name="anexoDois" value="{{old('anexoDois')}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="anexoTres" class="text-primary">Anexo Tres</label><br/>
                                    <input type="file" name="anexoTres" value="{{old('anexoTres')}}" class="form-control">
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