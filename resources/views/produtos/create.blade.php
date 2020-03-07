@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="floar-left">
                <h2>Criar Novo Produto</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('produtos.index') }}"> Voltar </a>
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

    <form action="{{ route('produtos.store') }}" method="POST">
        {{csrf_field()}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome</strong>
                    <input type="text" name="nome" class="form-control" placeholder="Nome do produto">
                </div>

            </div>
            <div class="col-xs 12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detalhes</strong>
                    <textarea class="form-control" style="height:150px" name="detalhes" placeholder="Detalhes do produto"></textarea>
                </div>
            <div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn-primary"> Enviar </button>
            </div>
        </div>
    </form>
</div>
@endsection


