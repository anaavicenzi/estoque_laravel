@extends('layout.principal')

@section('conteudo')

<h1>Novo produto</h1>

<form action="{{ route('produtos.adiciona')}}" method="post">
    
    <input type="hidden"
        name="_token" value="{{{ csrf_token() }}}" />

   
    <div class="form-group">
    <label for="nome">Nome</label>
    <input name="nome" id="nome" class="form-control">
    </div>
    
    <div class="form-group">
    <label for="descricao">Descrição</label>
    <input name="descricao" id="descricao" class="form-control">
    </div>
    
    <div class="form-group">
    <label for="valor">Valor</label>
    <input name="valor" id="valor" class="form-control">
    </div>
    
    <div class="form-group">
    <label for="quantidade">Quantidade</label>
    <input type="number" name="quantidade" id="quantidade" class="form-control">
    </div>
    <br>
    
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>

@stop