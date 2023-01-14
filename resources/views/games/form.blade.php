<label for="id">ID</label>
<input type="text" name="id" id="id" 
value="@if (isset($dados['id'])) {{ $dados['id'] }} @endif" disabled><br>

<label for="nome">Nome</label>
<input type="text" name="nome" id="nome" 
value="@if (isset($dados['nome'])) {{ $dados['nome'] }} @endif"><br>

<label for="telefone">Telefone</label>
<input type="text" name="telefone" id="telefone" 
value="@if (isset($dados['telefone'])) {{ $dados['telefone'] }} @endif"><br>

<label for="email">E-mail</label>
<input type="text" name="email" id="email" 
value="@if (isset($dados['email'])) {{ $dados['email'] }} @endif"><br>

<button type="submit" name="acao" value="salvar"
    id="acao">@if(isset($dados['nome'])) Alterar @else Salvar @endif
</button>