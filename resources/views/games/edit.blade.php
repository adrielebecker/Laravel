@extends('games.layout')

@section('titulo','Editar Usuários')

@section('conteudo')
    <form action="{{ route('jogadores.update',$dados['id']) }}" method="post">
        
        @method("PATCH")
        @csrf
        
        @include('games.form')

    </form>
@endsection