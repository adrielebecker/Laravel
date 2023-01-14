<form action="{{route('agenda.update',$id)}}" method="post">
@method('PUT')
    <label for="id">Id</label>
    <input type="number" name="id" id="id" value="1" disabled><br>
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="Rodrigo"><br>
    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" id="telefone" value="40028922"><br>
    <label for="email">E-mail</label>
    <input type="text" name="email" id="email" value="abrahabra@gmail.com"><br>
    <input type="submit" value="Salvar">
</form>