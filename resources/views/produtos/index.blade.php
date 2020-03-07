@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 magin-tb">
            <div class="float-left">
                <h2>Lista de Produtos</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" 
                    href="{{route('produtos.create')}}"> Criar Novo produto </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success" >
            <p> {{ $message}} </p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Item</th>
            <th>Nome</th>
            <th>Detalhes</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($produtos as $produto)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $produto->nome }}</td>
            <td>{{ $produto->detalhes }}</td>
            <td>
                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
                    {{csrf_field()}}
                    <a class="btn btn-info" href="{{ route('produtos.show', $produto->id) }}"> Detalhes </a>
                    <a class="btn btn-primary" href="{{ route('produtos.edit', $produto->id) }}"> Editar </a>
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-danger"> Apagar </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $produtos->links() !!}
</div>
@endsection

