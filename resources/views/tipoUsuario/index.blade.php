@extends('tipoUsuario.layout')

@section('titulo', 'Listar tipos de usuários')

@section('conteudo')
    <h1>Tipo de Usuário</h1>
    <form action="{{route('tipoUsuario.index')}}" method="get">
        <label for="find">Nome</label>
        <input type="text" id="find" name="find">
        <button type="submit">Consultar</button>
    </form>
    <table border="1">
        <th>ID</th><th>Nome</th><th>Ação</th>
        @foreach ($dados as $tipoUsuario)
        <tr>
            <td>{{$tipoUsuario['tuscodigo']}}</td>
            <td>{{$tipoUsuario['tusnome']}}</td>
            <td>
                <form action="{{route('tipoUsuario.edit', $tipoUsuario['tuscodigo'])}}" method="get">
                    <button type="submit">Editar</button>
                </form>
                <form action="{{route('tipoUsuario.destroy', $tipoUsuario['tuscodigo'])}}" method="post" onsubmit="return confirm('Deseja excluir tuse registro?')">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Excluir</button>
                </form>
                <form action="{{route('tipoUsuario.show', $tipoUsuario['tuscodigo'])}}" method="get">
                    <button type="submit">Visualizar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection