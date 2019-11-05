@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detalhes do Pedido</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                {{ $pedido->id }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md- 12">
            <div class=" form-group">
                <strong>Usuário:</strong>
                {{ $pedido->user}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md- 12">
            <div class=" form-group">
                <strong>Prato:</strong>
                {{ $pedido->prato}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md- 12">
            <div class=" form-group">
                <strong>Criado em:</strong>
                {{ date('d/m/y - H:i', strtotime($pedido->created_at)) }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md- 12">
            <div class=" form-group">
                <strong>Atualizado em:</strong>
                {{ date('d/m/y - H:i', strtotime($pedido->updated_at)) }}
            </div>
        </div>
    </div>
@endsection



