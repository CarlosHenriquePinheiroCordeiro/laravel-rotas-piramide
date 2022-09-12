@extends('agenda.layout')

@section('titulo', 'Editar contato')

@section('conteudo')
    <form action="{{route('agenda.update', $dados['id'])}}" method="post">
        @method("PATCH")
        @include('agenda.form')
    </form>
@endsection