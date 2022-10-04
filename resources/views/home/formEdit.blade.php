@extends('layouts.base')

@section('conteudo')
    <h1>
            atualizar Bebida

    </h1>      

        <form action="{{ route('home.update', ['id'=>$bebida->id_bebida] ) }}" method="post">        
        @csrf
       <div class="row">
            <div class="form-group col-md-6">
                <label for="bebida" class="form-label">Nome</label>
                <input type="text" name="bebida" id="bebida"
                    value="{{ $bebida->bebida}}" required
                class="form-control">

                <label for="valor" class="form-label">Preço</label>
                <input type="decimal" name="valor" id="valor"
                    value="{{$bebida->valor }}" required
                class="form-control">

                <label for="marca" class="form-label">Marca</label>
                <input type="text" name="marca" id="marca"
                    value="{{$bebida->marca }}" required
                class="form-control">
                
                <label for="imagem" class="form-label">Imagem</label>
                <input type="text" name="imagem" id="imagem"
                    value="{{$bebida->imagem }}" 
                class="form-control">
            </div>
            <div class="form-group col-md-2">
                <input type="submit" value="Atualizar" 
                   class="btn btn-primary">
            </div>
       </div>
    </form>
@endsection