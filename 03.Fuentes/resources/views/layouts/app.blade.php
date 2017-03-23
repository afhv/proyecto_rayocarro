<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Parqueadero Rayo - Carro</title>

        <link href="{{asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{asset('css/estilo.css') }}" rel="stylesheet">
        <link href="{{asset('css/font-awesome.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1 class="page-header">Parqueadero Rayo-Carro</h1>
                </div>
                <div class="col-md-2">
                    <h5>Usuario: {{ Auth::user()->name }}</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="panel-group" id="accordion">
                        @if (RayoCarroHelper::MostrarMenu(Auth::user()->perfil,'Perfiles'))
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i class="fa fa-drivers-license-o"></i>Perfiles</a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel2 panel-body">
                                    <table class="table">
                                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Perfiles','Listar'))
                                        <tr>
                                            <td>
                                                <i class="fa fa-server"></i><a href="{{ url ('perfils') }}">Listar</a>
                                            </td>
                                        </tr>
                                        @endif
                                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Perfiles','Crear'))
                                        <tr>
                                            <td>
                                                <i class="fa fa-plus-circle"></i><a href="{{ url('perfils/create') }}">Nuevo</a>
                                            </td>
                                        </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if (RayoCarroHelper::MostrarMenu(Auth::user()->perfil,'Opciones'))
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><i class="fa fa-book"></i>Opciones</a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel2 panel-body">
                                    <table class="table">
                                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Opciones','Listar'))
                                        <tr>
                                            <td>
                                                <i class="fa fa-server"></i><a href="{{ url ('opcions') }}">Listar</a>
                                            </td>
                                        </tr>
                                        @endif
                                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Opciones','Crear'))
                                        <tr>
                                            <td>
                                                <i class="fa fa-plus-circle"></i><a href="{{ url ('opcions\create') }}">Nuevo</a>
                                            </td>
                                        </tr>
                                        @endif
                                    </table>

                                </div>
                            </div>
                        </div>
                        @endif
                        @if (RayoCarroHelper::MostrarMenu(Auth::user()->perfil,'Usuarios'))
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><i class="fa fa-user-circle"></i>Usuarios</a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel2 panel-body">
                                    <table class="table">
                                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Usuarios','Listar'))
                                        <tr>
                                            <td>
                                                <i class="fa fa-server"></i><a href="{{ url ('users') }}">Listar</a>
                                            </td>
                                        </tr>
                                        @endif
                                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Opciones','Crear'))
                                        <tr>
                                            <td>
                                                <i class="fa fa-plus-circle"></i><a href="{{ url ('users\create') }}">Nuevo</a>
                                            </td>
                                        </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if (RayoCarroHelper::MostrarMenu(Auth::user()->perfil,'Conductores'))
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><i class="fa fa-user-o"></i>Conductores</a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel2 panel-body">
                                    <table class="table">
                                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Conductores','Listar'))
                                        <tr>
                                            <td>
                                                <i class="fa fa-server"></i><a href="{{ url ('personas') }}">Listar</a>
                                            </td>
                                        </tr>
                                        @endif
                                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Conductores','Crear'))
                                        <tr>
                                            <td>
                                                <i class="fa fa-plus-circle"></i><a href="{{ url ('personas\create') }}">Nuevo</a>
                                            </td>
                                        </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if (RayoCarroHelper::MostrarMenu(Auth::user()->perfil,'Vehiculos'))
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><i class="fa fa-car"></i>Vehiculos</a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Vehiculos','Listar'))
                                        <tr>
                                            <td>
                                                <i class="fa fa-server"></i><a href="{{ url ('vehiculos') }}">Listar</a>
                                            </td>
                                        </tr>
                                        @endif
                                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Vehiculos','Crear'))
                                        <tr>
                                            <td>
                                                <i class="fa fa-plus-circle"></i><a href="\vehiculos\create">Nuevo</a>
                                            </td>
                                        </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if (RayoCarroHelper::MostrarMenu(Auth::user()->perfil,'Registro E/S'))
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"><i class="fa fa-clock-o"></i>Registro E/S</a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Registro E/S','Listar'))
                                        <tr>
                                            <td>
                                                <i class="fa fa-plus-circle"></i><a href="{{ url('registros') }}">Listar</a>
                                            </td>
                                        </tr>
                                        @endif
                                        @if (RayoCarroHelper::MostrarSubmenu(Auth::user()->perfil,'Registro E/S','Crear'))
                                        <tr>
                                            <td>
                                                <i class="fa fa-plus-circle"></i><a href="{{ url('registros/new') }}">Nuevo</a>
                                            </td>
                                        </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse7"><i class="fa fa-key"></i>Salir</a>
                                </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <i class="fa fa-plus-circle"></i>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                    Cerrar Sesion
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>

                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <script src="{{ url('js/jquery-3.1.1.slim.min.js') }}"></script>
                <script src="{{ url('js/bootstrap.min.js') }}"></script>

                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2> @yield('content_title') </h2>
                            <ol class="breadcrumb">
                                @yield('breadcrumb')
                            </ol>
                            <div>

                                <div class="panel-body">
                                    @if(Session::has('flash_message_ok'))
                                    <article class="alert alert-success">
                                        {{ Session::get('flash_message_ok') }}
                                    </article>
                                    @endif
                                    @if(Session::has('flash_message_ko'))
                                    <article class="alert alert-danger">
                                        {{ Session::get('flash_message_ko') }}
                                    </article>
                                    @endif

                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Scripts -->
                {!! Html::script('assets/js/jquery-3.1.1.min.js') !!}
                {!! Html::script('assets/js/bootstrap.min.js') !!}
                </body>
            </html>
