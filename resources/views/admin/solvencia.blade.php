@extends('admin.base')
@section('title','LCNW - Solvencia')

@section('style')

@endsection

@section('script')
  <script>
    $('#2').addClass('active');
  </script>
@endsection


@section('content-body')
<div class="container">
  <div class="row">
  <h3>Solvencias de Laboratorio</h3>
    <div class="col-md-6">
      <div class="portlet light portlet-fit portlet-form bordered">
        <div class="portlet-title">
          <div class="caption">
            <i class=" icon-layers font-green"></i>
            <span class="caption-subject font-green sbold uppercase">Solvencia</span>
          </div>
          <div class="actions">
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
              <i class="icon-cloud-upload"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
              <i class="icon-wrench"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
              <i class="icon-trash"></i>
            </a>
          </div>
        </div>
        <div class="portlet-body">
          {{Form::open(['url'=>'/admin/solvencia','class'=>'form-horizontal','id'=>'form_sample_1'])}}
            {{ csrf_field() }}
            <div class="form-body">
              <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
              <div class="alert alert-success display-hide">
                  <button class="close" data-close="alert"></button> Your form validation is successful! </div>
              @if( session('error') )
              <div class="alert alert-danger ">
                <button class="close" data-close="alert"></button> {{session('error')}} </div>
              @endif
              @if( session('msj') )
              <div class="alert alert-success ">
                  <button class="close" data-close="alert"></button> {{session('msj')}} </div>
              @endif
              <div class="form-group form-md-line-input">
                <label class="col-md-3 control-label" for="form_control_1">Nombre
                  <span class="required">*</span>
                </label>
                <div class="col-md-9">
                  <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
                  <div class="form-control-focus"> </div>
                  <span class="help-block">Nombre de quien solicita la Solvencia</span>
                </div>
              </div>
              <div class="form-group form-md-line-input">
                <label class="col-md-3 control-label" for="form_control_1">Cedula
                  <span class="required">*</span>
                </label>
                <div class="col-md-9">
                  <input type="text" class="form-control" placeholder="Cedula" name="cedula" required>
                  <div class="form-control-focus"> </div>
                  <span class="help-block">Cedula de quien solicita la Solvencia</span>
                </div>
              </div>
              <div class="form-group form-md-line-input">
                <label class="col-md-3 control-label" for="form_control_1">Fecha
                  <span class="required">*</span>
                </label>
                <div class="col-md-9">
                  <input type="date" class="form-control" placeholder="01/01/2017" name="fecha" required>
                  <div class="form-control-focus"> </div>
                  <span class="help-block">Fecha que se expide la solvencia</span>
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
          {{Form::close()}}
        </div>

      </div>
    </div>
    <div class="col-md-6">
      <div class="portlet light portlet-fit portlet-form bordered">
        <div class="portlet-title">
          <div class="caption">
            <i class=" icon-layers font-green"></i>
            <span class="caption-subject font-green sbold uppercase">Vista de la Solvencia</span>
          </div>
          <div class="actions">
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
              <i class="icon-cloud-upload"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
              <i class="icon-wrench"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
              <i class="icon-trash"></i>
            </a>
          </div>
        </div>
        <div class="portlet-body">
          @include('pdf.solvencia')

        </div>
      </div>
    </div>
  </div>
</div>

@endsection