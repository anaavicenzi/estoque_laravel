@extends('layout.principal')

@section('conteudo')

<h1>Alterar produto: {{ $produto->nome }}</h1>

<form action="{{ route('produto.altera', ['id'=> $produto->id])}}" method="post">

    <input type="hidden"
        name="_token" value="{{{ csrf_token() }}}" />

    <div class="form-group">
    <label for="nome">Nome</label>
    <input id="nome_editar" name="nome" class="form-control" value="{{ $produto->nome }}" />
    </div>

    <div class="form-group">
    <label for="nome">Descricao</label>
    <input id="descricao_editar" name="descricao"  class="form-control" value="{{ $produto->descricao }}" />
    </div>

    <div class="form-group">
    <label for="nome">Valor</label>
    <input id="valor_editar" name="valor"  class="form-control" value="{{ $produto->valor }}" />
    </div>

    <div class="form-group">
    <label for="nome">Quantidade</label>
    <input id="quantidade_editar" name="quantidade"  type="number" class="form-control" value="{{ $produto->quantidade }}" />
    </div>
</br>
    <button id="btn-editar" type="submit" class="btn btn-success">Editar</button>
</form>

@stop
