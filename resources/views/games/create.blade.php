@extends('games.layout')

@section('titulo','Inserir Usuários')

@section('conteudo')
    <form action="{{ route('jogadores.store') }}" method="post">
        
        @method("POST")
        @csrf
        
        @include('games.form')

    </form>
@endsection