@extends('materia.layout')

@section('titulo', 'Incluir materia')

@section('conteudo')
    <form action="{{ route('materia.store')}}" method="post">
        @method("POST")
        @include('materia.form')
    </form>
@endsection
