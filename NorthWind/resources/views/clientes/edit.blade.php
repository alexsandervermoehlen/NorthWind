@extends('layouts.app')

@section('content')
    <h1>Alterar Produto</h1>
    <form action="{{route('clientes.update', ['cliente' => $cliente->IDCliente])}}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="NomeCompanhia" class="form-control" value="{{$cliente->NomeCompanhia}}">
        </div>

        <div class="form-group">
            <label for="">Nome de Contato</label>
            <input type="text" name="NomeContato" class="form-control" value="{{$cliente->NomeContato}}">
        </div>

        <div class="form-group">
            <label for="">Titulo do Contato</label>
            <input type="text" name="TituloContato" class="form-control" value="{{$cliente->TituloContato}}">
        </div>

        <div class="form-group">
            <label for="">Endereço</label>
            <input type="text" name="Endereco" class="form-control" value="{{$cliente->Endereco}}">
        </div>

        <div class="form-group">
            <label for="">Cidade</label>
            <input type="text" name="Cidade" class="form-control" value="{{$cliente->Cidade}}">
        </div>

        <div class="form-group">
            <label for="">Região</label>
            <input type="text" name="Regiao" class="form-control" value="{{$cliente->Regiao}}">
        </div>

        <div class="form-group">
            <label for="">CEP</label>
            <input type="text" name="CEP" class="form-control" value="{{$cliente->CEP}}">
        </div>

        <div class="form-group">
            <label for="">País</label>
            <input type="text" name="Pais" class="form-control" value="{{$cliente->Pais}}">
        </div>

        <div class="form-group">
            <label for="">Telefone</label>
            <input type="text" name="Telefone" class="form-control" value="{{$cliente->Telefone}}">
        </div>

        <div class="form-group">
            <label for="">Fax</label>
            <input type="text" name="Fax" class="form-control" value="{{$cliente->Fax}}">
        </div>

        <div>
            <button type="submit" class="btn btn-lg btn-success">Confirmar</button>
        </div>
    </form>
@endsection
