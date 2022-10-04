@extends('layouts.base')
@section('conteudo')
    
    <h1>{{$bebida->bebida}}</h1>
    <p>{{$bebida->valor}}</p>
    <p>{{$bebida->marca}}</p>
    <p>{{$bebida->imagem}}</p>
@endsection