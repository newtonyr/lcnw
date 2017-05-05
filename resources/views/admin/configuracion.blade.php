@extends('admin.base')
@section('title','LCNW - Horarios')

@section('style')

@endsection

@section('script')
{{Html::script('assets/js/horario-clases.js')}}
  <script>
    $('#4').addClass('active');
    $('#4-1').addClass('active');
  </script>
@endsection

@section('content-body')
  <div class="container">
    <div class="row">
      <ul class="list-inline">
        <li>
          <a href="{{route('admin')}}">Inicio</a>
          <i class="fa fa-circle"></i>
        </li>
        <li>
          <span>Configuración</span>
        </li>
      </ul>
      <hr>
      <div class="col-md-12">
      <div class="portlet light portlet-fit portlet-form bordered">
        <div class="portlet-title">
          <div class="caption">
            <i class="  icon-settings font-azul-ing"></i>
            <span class="caption-subject font-azul-ing sbold uppercase">Configuración del Sistema</span>
          </div>
        </div>
        <div class="portlet-body">
          {{Form::open(['url'=> '','class'=>'form-horizontal','id'=>'form-horario'])}}
            <div class="form-body">
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Nombre de Usuario
                  <span class="required">*</span>
                </label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="usuario" required placeholder="Nombre">
                  <div class="form-control-focus"> </div>
                  <span class="help-block">Nombre del Usuario Actual</span>
                </div>
                <div class="col-md-offset-4"></div>
              </div>
<hr>
              <h4>Cambiar Contraseña.</h4>
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Contraseña Actual
                  <span class="required">*</span>
                </label>
                <div class="col-md-6">
                  <input type="password" class="form-control" name="usuario" required placeholder="Contraseña">
                  <div class="form-control-focus"> </div>
                  <span class="help-block">Contraseña Actual</span>
                </div>
                <div class="col-md-offset-4"></div>
              </div>
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Contraseña Nueva
                  <span class="required">*</span>
                </label>
                <div class="col-md-6">
                  <input type="password" class="form-control" name="usuario" required placeholder="Contraseña Nueva">
                  <div class="form-control-focus"> </div>
                  <span class="help-block">Contraseña Nueva</span>
                </div>
                <div class="col-md-offset-4"></div>
              </div>
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Confirmar Contraseña
                  <span class="required">*</span>
                </label>
                <div class="col-md-6">
                  <input type="password" class="form-control" name="usuario" required placeholder="Confirmar Contraseña Nueva">
                  <div class="form-control-focus"> </div>
                  <span class="help-block">Confirmar Contraseña Nueva</span>
                </div>
                <div class="col-md-offset-4"></div>
              </div>
              <hr>
              <h4>Datos del Coordinador del Laboratorio.</h4>
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Nombre
                  <span class="required">*</span>
                </label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="usuario" required placeholder="Nombre">
                  <div class="form-control-focus"> </div>
                  <span class="help-block">Nombre del Coordinador</span>
                </div>
                <div class="col-md-offset-4"></div>
              </div>
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Apellido
                  <span class="required">*</span>
                </label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="usuario" required placeholder="Apelldio">
                  <div class="form-control-focus"> </div>
                  <span class="help-block">Apellido del Coordinador</span>
                </div>
                <div class="col-md-offset-4"></div>
              </div>
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Documento de Identidad (C.I).
                  <span class="required">*</span>
                </label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="usuario" required placeholder="V-99.999.999. / E-99.999.999">
                  <div class="form-control-focus"> </div>
                  <span class="help-block">C.I del Coordinador del Laboratorio. ( V : venezolano, E : extranjero)</span>
                </div>
                <div class="col-md-offset-4"></div>
              </div>
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Titulo / Licenciatura.
                  <span class="required">*</span>
                </label>
                <div class="col-md-4">
                  <select name="titulo" id="" class="form-control">
                    <option value="">Seleccionar</option>
                    <option value="ninguno">Ninguno</option>
                    <option value="ingeniero">Ingeniero</option>
                    <option value="tecnico">Tecnico</option>
                    <option value="otro">Otro</option>
                  </select>
                  <div class="form-control-focus"> </div>
                  <span class="help-block">Titulo o Licenciatura del Coordinador del Laboratorio</span>
                </div>
                <div class="separacion-form-xs"></div>

                <div class="form group-e">
                  <label class="col-md-1 control-label" for="form_control_1">Otro.
                    <span class="required">*</span>
                  </label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="otro" placeholder="Especifique">
                    <div class="form-control-focus"> </div>
                    <span class="help-block">Especifique el titulo que tiene.</span>
                  </div>
                </div>
              </div>

              <div class="form-actions">
                <div class="row">
                  <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn green">Enviar</button>
                    <button type="reset" class="btn default">Limpiar</button>
                  </div>
                </div>
              </div>

            </div>
          {{Form::close()}}
        </div>
      </div>
    </div>
    </div>
  </div>
@endsection