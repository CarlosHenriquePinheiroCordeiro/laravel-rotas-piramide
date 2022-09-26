@extends('materia.layout')

@section('titulo', 'Editar materia')

@section('conteudo')
    <form action="{{route('materia.update', $dados['materia']->matcodigo)}}" method="post">
        @method("PATCH")
        @include('materia.form')
    </form>
@endsection