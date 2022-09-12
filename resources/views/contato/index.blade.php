@extends('contato.layout')

@section('titulo', 'Listar Contatos')

@section('conteudo')
    <table border="1">
        <th>ID</th><th>Nome</th><th>Telefone</th><th>Email</th><th>Ação</th>
        @foreach ($dados as $contato)
        <tr>
            <td>{{$contato['id']}}</td>
            <td>{{$contato['nome']}}</td>
            <td>{{$contato['telefone']}}</td>
            <td>{{$contato['email']}}</td>
            <td>
                <form action="{{route('contato.edit', $contato['id'])}}" method="get">
                    <button type="submit">Editar</button>
                </form>
                <form action="{{route('contato.destroy', $contato['id'])}}" method="post" onsubmit="return confirm('Deseja excluir este registro?')">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Excluir</button>
                </form>
                <form action="{{route('contato.show', $contato['id'])}}" method="get">
                    <button type="submit">Visualizar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection