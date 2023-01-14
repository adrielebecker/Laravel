@extends('games.layout')

@section('titulo','Detalhes do Usuário')

@section('conteudo')
        <label for="id">ID</label>
        <input type="text" name="id" id="id" value="{{ $dados['id'] }}" disabled><br>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $dados['nome'] }}" disabled><br>
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="{{ $dados['telefone'] }}" disabled><br>
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" value="{{ $dados['email'] }}" disabled><br>
        <a href="{{ route('jogadores.edit',$dados['id']) }}"><button>Editar</button></a></td>
@endsection