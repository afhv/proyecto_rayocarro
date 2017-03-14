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
                <div class="col-md-12">
                    <h1 class="page-header">Parqueadero Rayo-Carro</h1>
                </div>
            </div>
        </div>


                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Nuevo</a></li>
                                                    <li><a href="#">Consultar</a></li>
                                                    <li><a href="#">Modificar</a></li>
                                                    <li><a href="#">Eliminar</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vehiculos<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Nuevo</a></li>
                                                    <li><a href="#">Consultar</a></li>
                                                    <li><a href="#">Modificar</a></li>
                                                    <li><a href="#">Eliminar</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Conductores<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Nuevo</a></li>
                                                    <li><a href="#">Consultar</a></li>
                                                    <li><a href="#">Modificar</a></li>
                                                    <li><a href="#">Eliminar</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registro E/S<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="\RegistroES\new">Nuevo</a></li>
                                                    <li><a href="\RegistroES\search">Consultar</a></li>
                                                    <li><a href="\RegistroES\delete">Eliminar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div><!-- /.navbar-collapse -->
                                </div><!-- /.container-fluid -->
                            </nav>

        <div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="exte panel-title">
                            <a id="unique" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-user-circle"></i>Usuarios</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel2 panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <i class="fa fa-plus-circle"></i><a href="\RegistroU\save">Nuevo</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-search-plus"></i><a href="\RegistroU\find">Consultar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-pencil"></i><a href="\RegistroU\search">Modificar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-eraser"></i><a href="\RegistroU\delete">Eliminar</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-car"></i>Vehiculos</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                           <table class="table">
                                <tr>
                                    <td>
                                        <i class="fa fa-plus-circle"></i><a href="\RegistroV\save">Nuevo</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-search-plus"></i><a href="\RegistroV\find">Consultar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-pencil"></i><a href="\RegistroV\search">Modificar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-eraser"></i><a href="\RegistroV\delete">Eliminar</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-user-o"></i>Conductores</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <i class="fa fa-plus-circle"></i><a href="\RegistroC\save">Nuevo</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-search-plus"></i><a href="\RegistroC\find">Consultar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-pencil"></i><a href="\RegistroC\search">Modificar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-eraser"></i><a href="\RegistroC\delete">Eliminar</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><i class="fa fa-clock-o"></i>Registro E/S</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                           <table class="table">
                                <tr>
                                    <td>
                                        <i class="fa fa-plus-circle"></i><a href="\RegistroES\new">Nuevo</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-search-plus"></i><a href="\RegistroES\search">Consultar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-pencil"></i><a href="\RegistroES\find">Modificar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-eraser"></i><a href="\RegistroES\find">Eliminar</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


  <script src="js/jquery-3.1.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <ol class="breadcrumb">
                                <!--<li><a href="#">Inicio</a></li>
                                <li><a href="#">Libros</a></li>
                                <li class="active">Bootstrap 3</li>-->
                                @yield('breadcrumb')
                            </ol>
                        </div>

                        <div class="panel-body">
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




