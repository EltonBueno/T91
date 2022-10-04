@extends('layouts.base')

@section('conteudo')
    <h1>
            Novo Bebida

    </h1>      

        <form action="{{ route('home.store') }}" method="post">        
        @csrf
       <div class="row">
            <div class="form-group col-md-6">
                <label for="bebida" class="form-label">Nome</label>
                <input type="text" name="bebida" id="bebida"
                    value="{{old('bebida') }}" required
                class="form-control">

                <label for="valor" class="form-label">Preço</label>
                <input type="decimal" name="valor" id="valor"
                    value="{{old('valor') }}" required
                class="form-control">

                <label for="marca" class="form-label">Marca</label>
                <input type="text" name="marca" id="marca"
                    value="{{old('marca') }}" required
                class="form-control">
                
                <label for="imagem" class="form-label">Imagem</label>
                <input type="text" name="imagem" id="imagem"
                    value="{{old('imagem') }}" 
                class="form-control">
            </div>
            <div class="form-group col-md-2">
                <input type="submit" value="Cadastrar" 
                   class="btn btn-primary">
            </div>
       </div>
    </form>
@endsection