@extends('materia.layout')

@section('titulo', 'Listar materias')

@section('conteudo')
    <h1>Matéria</h1>
    <form action="{{route('materia.index')}}" method="get">
        <label for="find">Nome</label>
        <input type="text" id="find" name="find">
        <button type="submit">Consultar</button>
    </form>
    <table border="1">
        <th>ID</th><th>Nome</th><th>Descrição</th><th>Ação</th>
        @foreach ($dados as $materia)
        <tr>
            <td>{{$materia['matcodigo']}}</td>
            <td>{{$materia['matnome']}}</td>
            <td>{{$materia['matdescricao']}}</td>
            <td>
                <form action="{{route('materia.edit', $materia['matcodigo'])}}" method="get">
                    <button type="submit">Editar</button>
                </form>
                <form action="{{route('materia.destroy', $materia['matcodigo'])}}" method="post" onsubmit="return confirm('Deseja excluir este registro?')">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Excluir</button>
                </form>
                <form action="{{route('materia.show', $materia['matcodigo'])}}" method="get">
                    <button type="submit">Visualizar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection