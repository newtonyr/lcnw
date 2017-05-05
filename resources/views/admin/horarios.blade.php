@extends('admin.base')
@section('title','LCNW - Horarios')

@section('style')

@endsection

@section('script')
{{Html::script('assets/js/horario-clases.js')}}
  <script>
    $('#1').addClass('active');
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
          <span>Horarios</span>
        </li>
      </ul>
      <hr>

    <h3>Horario del Clases del Laboratorio Nikolaus Walczuch (LCNW).</h3>

    <div class="col-md-12">
      <div class="portlet light portlet-fit portlet-form bordered">
        <div class="portlet-title">
          <div class="caption">
            <i class=" icon-layers font-azul-ing "></i>
            <span class="caption-subject font-azul-ing sbold uppercase">Horario</span>
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
          {{Form::open(['url'=> '','class'=>'form-horizontal','id'=>'form-horario'])}}
            <div class="form-body">
                <div class="form-group form-md-line-input">
                  <div class="form-group-e">
                    <label class="col-md-2 control-label" for="form_control_1">Materia
                      <span class="required">*</span>
                    </label>
                    <div class="col-md-4">
                      <select name="materia" id="" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="PR1">Programación 1</option>
                        <option value="PR2">Programación 2</option>
                        <option value="PR3">Programación 3</option>
                        <option value="ArqCom">Arquitectura de Computadoras</option>
                      </select>
                      <div class="form-control-focus"> </div>
                      <span class="help-block">Materia</span>
                    </div>
                  </div>
                  <div class="separacion-form-xs"></div>
                  <div class="form-group-e">
                    <label class="col-md-2 control-label" for="form_control_1">Profesor
                      <span class="required">*</span>
                    </label>
                    <div class="col-md-4">
                      <select name="profesores" id="" class="form-control" disabled required>
                        <option value="">Seleccione una Materia</option>
                      </select>
                      <div class="form-control-focus"> </div>
                      <span class="help-block">Profesor que dicta Materia</span>
                    </div>
                  </div>
                </div>
                <div class="form-group form-md-line-input">
                  <div class="form-group-e">
                    <label class="col-md-2 control-label" for="form_control_1">Horas a la semana
                      <span class="required">*</span>
                    </label>
                    <div class="col-md-4">
                      <input type="number" class="form-control" value="0" name="horas" required>
                      <div class="form-control-focus"> </div>
                      <span class="help-block">Hora todales de clases a la semana</span>
                    </div>
                  </div>
                  <div class="separacion-form-xs"></div>
                  <div class="form-group-e">
                    <label class="col-md-2 control-label" for="form_control_1">Intervalo de Clases
                      <span class="required">*</span>
                    </label>
                    <div class="col-md-4">
                      <select name="int-clases" id="" class="form-control" disabled required>
                        <option value="">Seleccione el intervalo</option>
                      </select>
                      <div class="form-control-focus"> </div>
                      <span class="help-block">Horas de uso del laboratorio</span>
                    </div>
                  </div>
                </div>
                <div class="form-group form-md-checkboxes">
                    <label class="col-md-2 control-label" for="form_control_1">Dias de Clase
                      <span class="required">*</span>
                    </label>
                    <div class="col-md-10">
                      <div class="md-checkbox-inline">
                        <div class="md-checkbox">
                          <input type="checkbox" id="checkbox1_1" class="md-check" name="dias" value="lunes" required>
                          <label for="checkbox1_1">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Lunes
                          </label>
                        </div>
                        <div class="md-checkbox">
                          <input type="checkbox" id="checkbox1_2" class="md-check" name="dias" value="martes" required>
                          <label for="checkbox1_2">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Martes
                          </label>
                        </div>
                        <div class="md-checkbox">
                          <input type="checkbox" id="checkbox1_3" class="md-check" name="dias" value="miercoles" required>
                          <label for="checkbox1_3">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Miercoles
                          </label>
                        </div>
                        <div class="md-checkbox">
                          <input type="checkbox" id="checkbox1_4" class="md-check" name="dias" value="jueves" required>
                          <label for="checkbox1_4">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Jueves
                          </label>
                        </div>
                        <div class="md-checkbox">
                          <input type="checkbox" id="checkbox1_5" class="md-check" name="dias" value="viernes" required>
                          <label for="checkbox1_5">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Viernes
                          </label>
                        </div>
                        <div class="md-checkbox">
                          <input type="checkbox" id="checkbox1_6" class="md-check" name="dias" value="sabado" required>
                          <label for="checkbox1_6">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Sabado
                          </label>
                        </div>
                      </div>
                      <div class="form-control-focus"> </div>
                      <span class="help-block"></span>
                    </div>
                </div>
                <div id="dias">
                </div>
            </div>
          {{Form::close()}}
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="portlet box azul-ing">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs" style="color:white;"></i>Bordered Bootstrap 3.0 Responsive Table </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                        <a href="javascript:;" class="reload"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="horario-clase">
                                            <thead >
                                                <tr id="hor-lab-thead">
                                                    <th id="hora"> Hora </th>
                                                    <th id="lunes"> Lunes </th>
                                                    <th id="martes"> Martes </th>
                                                    <th id="miercoles"> Miercoles </th>
                                                    <th id="jueves"> Jueves </th>
                                                    <th id="viernes"> Viernes </th>
                                                    <th id="sabado"> Sabado  </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @for($i =1 , $h = 8 ; $i < 6; $i++, $h += 2)
                                                <tr>
                                                  @if( $h >= 12 )
                                                    <td id="hor"> {{$h >= 14 ? $h-12 : $h}}:00 pm a<br>{{$h+2 >= 14 ? ($h+2) -12 : ''}} pm </td>

                                                  @elseif( $h < 12)
                                                    <td id="hor">
                                                      {{$h}}:00 am a<br>
                                                      @if($h+2 ==12)
                                                        {{$h+2}} pm
                                                      @else
                                                        {{$h+2}} am
                                                      @endif
                                                    </td>
                                                  @endif
                                                @for($j =1 ; $j <= 6; $j++)
                                                  <td id="{{$i}}{{$j}}"></td>
                                                @endfor
                                                </tr>
                                              @endfor
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
    </div>

    </div>
  </div>
@endsection