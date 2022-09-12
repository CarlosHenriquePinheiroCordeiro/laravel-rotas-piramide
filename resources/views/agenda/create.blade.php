@extends('agenda.layout')

@section('titulo', 'Incluir contato')

@section('conteudo')
    <form action="{{ route('agenda.store')}}" method="post">
        @method("POST")
        @include('agenda.form')
    </form>
@endsection
