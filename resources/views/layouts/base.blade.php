<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  {{Html::style('assets/plugins/font-awesome/css/font-awesome.min.css')}}
  {{Html::style('assets/plugins/simple-line-icons/simple-line-icons.min.css')}}
  {{Html::style('assets/plugins/bootstrap-3.3.7/css/bootstrap.min.css')}}
  {{Html::style('assets/plugins/uniform/css/uniform.default.css')}}
  {{Html::style('assets/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}
  {{Html::style('assets/css/components.css')}}
  {{Html::style('assets/css/plugins.min.css')}}
  @yield('style')
  {{Html::style('assets/css/style.css')}}
  <link rel="shortcut icon" type="image/ico" href="{{URL::asset('assets/images/favicon.ico')}}" />
</head>
<body id="web-site">
<!-- navbar-fixed-top -->
<header >
  <nav class="navbar navbar-default navbar-fixed-top " role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#n1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('index')}}"><span id="title-navbar">Laboratorio de Computación </span>
        <br> Nikolaus Walczuch
      </a>
    </div>
    <div class="collapse navbar-collapse" id="n1">
      <ul class="nav navbar-nav">
        <li id="1" ><a href="{{route('index')}}">Inicio</a></li>
        <li id="2" ><a href="{{route('nikolaus')}}">Nikolaus Walczuch</a></li>
        <li id="3" ><a href="{{route('enlaces')}}">Enlaces de Interes</a></li>

        <li id="4" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Integrantes <b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <li id="4-1"><a href="{{route('profesores')}}">Profesores</a></li>
            <li id="4-2"><a href="{{route('preparadores')}}">Preparadores</a></li>
            <li id="4-3"><a href="{{route('coordinador')}}">Cordinador del Laboratorio</a></li>
            <li id="4-4"><a href="{{route('becarios')}}">Becarios</a></li>
          </ul>
        </li>
        <li id="5"><a href="{{route('contacto')}}">Contacto</a></li>
      </ul>
    </div>
  </nav>
  <div class="separation-top"></div>
  @include('layouts.banner')

</header>



@yield('content-body')


<div class="separation-bottom"></div>
<footer class="navbar-fixed-bottom text-right">
  Plantilla actualizada y desarrollada por Robi Antonio, Rondón Peña. 2017.
</footer>

  {{Html::script('assets/plugins/jquery-2.2.3.min.js')}}
  {{Html::script('assets/plugins/bootstrap-3.3.7/js/bootstrap.min.js')}}
  @yield('script')
</body>
</html>