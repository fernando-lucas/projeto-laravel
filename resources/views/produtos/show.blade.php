@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detalhes do Produto</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('produtos.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                {{ $produto->id }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md- 12">
            <div class=" form-group">
                <strong>Nome:</strong>
                {{ $produto->nome}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md- 12">
            <div class=" form-group">
                <strong>Detalhes:</strong>
                {{ $produto->detalhes}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md- 12">
            <div class=" form-group">
                <strong>Criado em:</strong>
                {{ date('d/m/y - H:i', strtotime($produto->created_at)) }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md- 12">
            <div class=" form-group">
                <strong>Atualizado em:</strong>
                {{ date('d/m/y - H:i', strtotime($produto->updated_at)) }}
            </div>
        </div>
    </div>
@endsection



