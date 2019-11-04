@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 magin-tb">
            <div class="float-left">
                <h2>Lista de pedidos</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success"
                    href="{{route('pedidos.create')}}"> Criar Novo pedido </a>
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
            <th>Usuário</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($pedidos as $pedido)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pedido->prato }}</td>
            <td>{{ $pedido->user }}</td>
            <td>
                <form action="{{ route('pedidos.destroy', $produto->id) }}" method="POST">
                    {{csrf_field()}}
                    <a class="btn btn-info" href="{{ route('pedidos.show', $pedido->id) }}"> Detalhes </a>
                    <a class="btn btn-primary" href="{{ route('pedidos.edit', $pedido->id) }}"> Editar </a>
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-danger"> Apagar </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $pedidos->links() !!}
</div>
@endsection

