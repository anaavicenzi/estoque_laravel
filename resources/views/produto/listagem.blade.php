@extends('layout.principal')
@section('conteudo')

@if(empty($produtos))
    <div class="alert alert-danger">Você não tem nenhum produto cadastrado.
    </div>

@else
    <h1 class="titulo">Listagem de produtos</h1>
    <table class="table table-striped table-bordered table-hover">

    <thead>
        <th>Nome</th>
        <th>Valor</th>
        <th>Descrição</th>
        <th>Quantidade</th>
        <th>Ver</th>
        <th>Deletar</th>
        <th>Editar</th>
    </thead>
    <tbody></tbody>
        @foreach ($produtos as $p)
        <tr class="{{$p->quantidade<=1 ? 'table-danger' : ''}}">
            <td> {{ e($p->nome) }} </td>
            <td> {{ e($p->valor) }} </td>
            <td> {{ e($p->descricao) }} </td>
            <td> {{ e($p->quantidade) }} </td>
            <td><a href="{{ route('produtos.mostra', ['id'=> $p->id]) }}"><span class="bi bi-search" aria-hidden="true"></span></a></td>
            <td><a href="{{ route('produtos.remove', ['id'=> $p->id]) }}" method="post"><span class="bi bi-trash" aria-hidden="true"></span></a></td>
            <td><a href="{{ route('produto.edita', ['id'=> $p->id])}}"><span class="bi bi-pencil-fill" aria-hidden="true"></span></td></class></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

    @if(old('nome'))
    <div class="alert alert-success">
        <strong>Sucesso!</strong>
        O produto {{ old('nome') }} foi adicionado.
    </div>
    @endif
@stop
