<table>
    <tr><td>Rodrigo</td><td><a href="{{route('agenda.edit',1)}}">Editar</a></td>
        <td><form action="{{route('agenda.destroy',1)}}" method="post">
            @method('DELETE')
            <a href="#" onclick="this.parentNode.submit();">Excluir</a>
        </form></td>
    </tr>
    <tr><td>Marcela</td><td><a href="{{route('agenda.edit',2)}}">Editar</a></td>
        <td><form action="{{route('agenda.destroy',2)}}" method="post">
            @method('DELETE')
            <a href="#" onclick="this.parentNode.submit();">Excluir</a>
        </form></td>
    </tr>
    <tr><td>Cristhian</td><td><a href="{{route('agenda.edit',3)}}">Editar</a></td>
        <td><form action="{{route('agenda.destroy',3)}}" method="post">
            @method('DELETE')
            <a href="#" onclick="this.parentNode.submit();">Excluir</a>
        </form></td>
    </tr>
</table>