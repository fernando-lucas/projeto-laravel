@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="floar-left">
                <h2>Criar Novo Pedido</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> Voltar </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert=danger">
            <strong>Whoops!</strong> Existe algo errado nos seus valores.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pedidos.store') }}" method="POST">
        {{csrf_field()}}
        <div class="row">
            <div class="col-xs 12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Usuário</strong>
                    <input type="text" name="user" class="form-control" placeholder="Código do usuário">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Prato</strong>
                    <input type="text" name="prato" class="form-control" placeholder="Código do prato">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn-primary"> Enviar </button>
            </div>
        </div>
    </form>
</div>
@endsection


