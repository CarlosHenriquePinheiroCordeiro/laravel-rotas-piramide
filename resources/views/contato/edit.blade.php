@extends('contato.layout')

@section('titulo', 'Editar contato')

@section('conteudo')
    <form action="{{route('contato.update', $dados['contato']->id)}}" method="post">
        @method("PATCH")
        @include('contato.form')
    </form>
@endsection