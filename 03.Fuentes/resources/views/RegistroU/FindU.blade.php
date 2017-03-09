@section('content_title')
Consulta Registros Usuarios
@stop

@section('breadcrumb')
<li><a href="\">Inicio</a></li>
<li><a href="\RegistroU\index">Registro Usuarios</a></li>
<li class="active">Listar Usuarios</li>
@stop


@section('content')
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Perfil</th>
                <th>Nombre usuario</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pepito</td>
                <td>ma@gmail.com</td>
                <td>Administrador</td>
                <td>Pepito0001</td>
                <td><button type="button" class="btn btn-warning">Eliminar</button></td>
            </tr>
           <tr>
                <td>Juan</td>
                <td>jjja@gmail.com</td>
                <td>Administrador</td>
                <td>Juan01</td>
                <td><button type="button" class="btn btn-warning">Eliminar</button></td>
            </tr>
            <tr>
                <td>Sebastian</td>
                <td>yma@gmail.com</td>
                <td>Operario</td>
                <td>So0001</td>
                <td><button type="button" class="btn btn-warning">Eliminar</button></td>
            </tr>
            <tr>
                <td>Maria</td>
                <td>werqa@gmail.com</td>
                <td>Operario</td>
                <td>njuu</td>
                <td><button type="button" class="btn btn-warning">Eliminar</button></td>
            </tr>
        </tbody>
    </table>
</div>
@stop
