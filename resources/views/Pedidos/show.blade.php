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
                {{ $pedidosFinal->id }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md- 12">
            <div class=" form-group">
                <strong>Usuário:</strong>
                {{ $pedidosFinal->name}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md- 12">
            <div class=" form-group">
                <strong>Prato:</strong>
                {{ $pedidosFinal->nome}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md- 12">
            <div class=" form-group">
                <strong>Criado em:</strong>
                {{ date('d/m/y - H:i', strtotime($pedidosFinal->created_at)) }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md- 12">
            <div class=" form-group">
                <strong>Atualizado em:</strong>
                {{ date('d/m/y - H:i', strtotime($pedidosFinal->updated_at)) }}
            </div>
        </div>
    </div>
@endsection



