<!DOCTYPE html>
<html lang="en">
    <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Parqueadero Rayo - Carro</title>

    <link href="{{asset('css/bootstrap.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">Parqueadero Rayo-Carro</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
               <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="\RegistroU\save">Nuevo</a></li>
                                                    <li><a href="\RegistroU\find">Consultar</a></li>
                                                    <li><a href="\RegistroU\search">Modificar</a></li>
                                                    <li><a href="\RegistroU\delete">Eliminar</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vehiculos<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="\RegistroV\save">Nuevo</a></li>
                                                    <li><a href="\RegistroV\find">Consultar</a></li>
                                                    <li><a href="\RegistroV\search">Modificar</a></li>
                                                    <li><a href="\RegistroV\delete">Eliminar</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Conductores<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="\RegistroC\save">Nuevo</a></li>
                                                    <li><a href="\RegistroC\find">Consultar</a></li>
                                                    <li><a href="\RegistroC\search">Modificar</a></li>
                                                    <li><a href="\RegistroC\delete">Eliminar</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registro E/S<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="\RegistroES\new">Nuevo</a></li>
                                                    <li><a href="\RegistroES\search">Consultar</a></li>
                                                    <li><a href="\RegistroES\del">Eliminar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div><!-- /.navbar-collapse -->
                                </div><!-- /.container-fluid -->
                            </nav>
                        </div>
                    </div>
                </div>
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
