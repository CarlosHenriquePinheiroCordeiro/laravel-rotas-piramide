@extends('tipoUsuario.layout')

@section('titulo', 'Incluir tipoUsuario')

@section('conteudo')
    <form action="{{ route('tipoUsuario.store')}}" method="post">
        @method("POST")
        @include('tipoUsuario.form')
    </form>
@endsection
