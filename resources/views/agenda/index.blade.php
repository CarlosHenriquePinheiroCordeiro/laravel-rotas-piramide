@extends('agenda.layout')

@section('titulo', 'Listar agenda')

@section('conteudo')
    <table border="1">
        <th>ID</th><th>Nome</th><th>Telefone</th><th>Email</th><th>Ação</th>
        @foreach ($dados as $agenda)
        <tr>
            <td>{{$agenda['id']}}</td>
            <td>{{$agenda['nome']}}</td>
            <td>{{$agenda['telefone']}}</td>
            <td>{{$agenda['email']}}</td>
            <td>
                <form action="{{route('agenda.edit', $agenda['id'])}}" method="get">
                    <button type="submit">Editar</button>
                </form>
                <form action="{{route('agenda.destroy', $agenda['id'])}}" method="post" onsubmit="return confirm('Deseja excluir este registro?')">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Excluir</button>
                </form>
                <form action="{{route('agenda.show', $agenda['id'])}}" method="get">
                    <button type="submit">Visualizar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection