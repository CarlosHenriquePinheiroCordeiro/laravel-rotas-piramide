@extends('contato.layout')

@section('titulo', 'Incluir contato')

@section('conteudo')
    <form action="{{ route('contato.store')}}" method="post">
        @method("POST")
        @include('contato.form')
    </form>
@endsection
