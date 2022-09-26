@extends('estado.layout')

@section('titulo', 'Listar estados')

@section('conteudo')
    <h1>Estado</h1>
    <form action="{{route('estado.index')}}" method="get">
        <label for="find">Nome</label>
        <input type="text" id="find" name="find">
        <button type="submit">Consultar</button>
    </form>
    <table border="1">
        <th>ID</th><th>Nome</th><th>Ação</th>
        @foreach ($dados as $estado)
        <tr>
            <td>{{$estado['estcodigo']}}</td>
            <td>{{$estado['estnome']}}</td>
            <td>
                <form action="{{route('estado.edit', $estado['estcodigo'])}}" method="get">
                    <button type="submit">Editar</button>
                </form>
                <form action="{{route('estado.destroy', $estado['estcodigo'])}}" method="post" onsubmit="return confirm('Deseja excluir este registro?')">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Excluir</button>
                </form>
                <form action="{{route('estado.show', $estado['estcodigo'])}}" method="get">
                    <button type="submit">Visualizar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection