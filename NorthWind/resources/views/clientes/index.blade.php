@extends('layouts.app')

@section('content')
<a href="{{route('clientes.create')}}" class="btn btn-lg btn-success">Criar Cliente</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>Região</th>
            <th>Telefone</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->IDCliente}}</td>
                <td>{{$cliente->NomeCompanhia}}</td>
                <td>{{$cliente->Endereco}}</td>
                <td>{{$cliente->Cidade}}</td>
                <td>{{$cliente->Regiao}}</td>
                <td>{{$cliente->Telefone}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('clientes.edit', ['cliente' => $cliente->IDCliente])}}" class="btn btn-sm btn-primary">Editar</a>

                        <form action="{{route('clientes.destroy', ['cliente' => $cliente->IDCliente])}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$clientes->links()}}
@endsection
