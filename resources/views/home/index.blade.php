@extends('layouts.base')

@section('conteudo')
    <h1>Bebidas - <a class="btn btn-success" href="{{ route('home.create') }}">Novo</a></h1>

    <table class="table table-striped table-border">
        <thead>
            <tr>
                <th>Ações</th>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Marca</th>
                <th>Imagem</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bebidas as $bebida)         
            <tr>
                <td>
                    <a href="{{ route('home.edit', ['id'=>$bebida->id_bebida]) }}" class="btn btn-success">
                        Editar
                    </a>
                    <a href="{{ route('home.show', ['id'=>$bebida->id_bebida]) }}" class="btn btn-danger">
                        Ver
                    </a>
                    <a href="{{route('home.destroy', ['id'=> $bebida->id_bebida])}}" class="btn btn-warning">
                        Deletar
                    </a>
                </td>
                <td>{{ $bebida->id_bebida}}</td>
                <td>{{ $bebida->bebida}}</td>
                <td>{{ $bebida->valor}}</td>
                <td>{{ $bebida->marca}}</td>
                <td><img src="<?php echo $bebida->imagem; ?>" alt=""></td>
            </tr>
            @endforeach 
        </tbody>
    </table>

@endsection