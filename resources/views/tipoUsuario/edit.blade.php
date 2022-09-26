@extends('tipoUsuario.layout')

@section('titulo', 'Editar tipoUsuario')

@section('conteudo')
    <form action="{{route('tipoUsuario.update', $dados['tipoUsuario']->tuscodigo)}}" method="post">
        @method("PATCH")
        @include('tipoUsuario.form')
    </form>
@endsection