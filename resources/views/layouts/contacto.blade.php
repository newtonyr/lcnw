@extends('layouts.base')
@section('title','LCNW - Contacto')

@section('script')
  <script>
    $('#5').addClass('active');
  </script>
@endsection

@section('content-body')
<div class="container">
  <div class="row">
  <hr>
  <h3>Contacto</h3>
  <p class="text-justify">
El Laboratorio de Computación “Nikolaus Walczuch” se encuentra en el Estado Mérida, Ciudad de Mérida, La Hechicera, Facultad de Ingeniería, Ala Sur, Nivel Patio. salón 2S09.
  </p>
  <p class="text-justify">
Puede contactarnos en:
  </p>


  <div class="col-xs-12 col-sm-9">
    {{Form::open(['url'=>'','class'=>'form-horizontal', 'id'=>'contacto'])}}
      <div class="form-group">
        <label for="nombre" class="label-control col-sm-2 text-left">Nombre:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
        </div>
      </div>
      <div class="form-group">
        <label for="correo" class="label-control col-sm-2 text-left">Correo:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo" required>
        </div>
      </div>
      <div class="form-group">
        <label for="mensaje" class="label-control col-sm-2 text-left">Mensaje:</label>
        <div class="col-sm-10">
          <textarea name="mensaje" class="form-control" id="mensaje" rows="4" placeholder="Mensaje" required></textarea>
        </div>
      </div>
      <div class="pull-right">
        <button type="reset" class="btn btn-info">Limpiar</button>
        <button type="submit" class="btn btn-info">Enviar</button>
      </div>
      <div class="clearfix"></div>
    {{Form::close()}}
  </div>
  <div class="col-xs-12 col-sm-3">
    <span class="icon-envelope"></span> Email:<a href="mailto:lcnw@ula.ve" title="Correo del Laboratorio">lcnw@ula.ve</a> <br>
    <span class="icon-social-twitter"></span> Twitter:<a href="https://twitter.com/NikolausWalczuc" target="_blank">@NikolausWalczuc</a> <br>
    <span class="glyphicon glyphicon-earphone"></span> Telf: 0274-2402992
  </div>



  </div>
</div>
@endsection