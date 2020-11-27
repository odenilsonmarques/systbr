@extends('layouts.templateIndex')
@section('title','index')
@section('content')
    <div class="row">
        <div class="col-lg-6 text-center" style="border:1px solid red;">
            <img src="{{('assets/img/brasao.png')}}" style="width:300px;height:170px">
        </div>
        <div class="col-lg-6 text-center" style="border:1px solid red;">
            <h2 style="background-color:red">
                <strong>OPERAÇÃO</strong><br><br>
                <img src="{{('assets/img/brasao.png')}}">
            </h2>
            <h4><strong>TAPA BURACOS</strong></h4>
        </div>
    </div>
@endsection
