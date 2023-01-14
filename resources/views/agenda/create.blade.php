<form action="{{route('agenda.store')}}" method="post">
    <label for="id">Id</label>
    <input type="number" name="id" id="id" disabled><br>
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome"><br>
    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" id="telefone"><br>
    <label for="email">E-mail</label>
    <input type="text" name="email" id="email"><br>
    <input type="submit" value="Salvar">
</form>