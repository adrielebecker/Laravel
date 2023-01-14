@extends('games.layout')

@section('titulo','Listar Usuários')

@section('conteudo')

<table>
<tr><td><b>ID</b></td>
    <td><b>Nome</b></td>
    <td><b>Telefone</b></td>
    <td><b>E-mail</b></td>
    <td><b>Detalhes</b></td>
    <td><b>Alterar</b></td>
    <td><b>Excluir</b></td></tr>
    @if (isset($_SESSION['usuario']))
      @foreach ($_SESSION['usuario'] as $dados) 
        <tr><td>{{ $dados['id'] }}</td>
        <td>{{ $dados['nome'] }}</td>
        <td>{{ $dados['telefone'] }}</td>
        <td>{{ $dados['email'] }}</td>
        <td><a href="{{ route('jogadores.show',$dados['id']) }}"><button>Detalhes</button></a></td>
        <td><a href="{{ route('jogadores.edit',$dados['id']) }}"><button>Editar</button></a></td>
        <td><form id="form_delete" name="form_delete" action="{{ route('jogadores.destroy',$dados['id']) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
             @method('DELETE')
             @csrf
             <button type="submit">Excluir</button>
            </form></td></tr>
      @endforeach
    @endif
</table>
@endsection