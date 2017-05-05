$(document).ready(function(argument) {
  $('select[name=materia]').on('change',function(e) {
    if($(this).val()){
      var $selectprofesores = $('select[name=profesores]');
      if($(this).val() == 'PR1'){
        $selectprofesores.prop('disabled',false);
        $selectprofesores.empty();
        $selectprofesores.
          append('<option value="pr101">Jesus Alberto, Perez Angulo, Sección: 01</option>');
          $selectprofesores.
          append('<option value="pr102">Hilda Yelitza, Contreras Zambrano, Sección: 02</option>');
      }else if($(this).val() == 'PR2'){
        $selectprofesores.prop('disabled',false);
        $selectprofesores.empty();
        $selectprofesores.
          append('<option value="pr201">Rafael, Rivas Estrada, Sección: 01</option>');
        $selectprofesores.
          append('<option value="pr202">Junior Amilcar, Altamiranda Pérez, Sección: 02</option>');
      }else if($(this).val() == 'PR3'){
        $selectprofesores.prop('disabled',false);
        $selectprofesores.empty();
        $selectprofesores.
          append('<option value="pr301">Jesus Alberto, Perez Angulo, Sección: 01</option>');
        $selectprofesores.
          append('<option value="pr302">Alejandro, Mujica, Sección: 02</option>');
      }else if($(this).val() == 'ArqCom'){
        $selectprofesores.prop('disabled',false);
        $selectprofesores.empty();
        $selectprofesores.
          append('<option value="ArqCom-01">Gerard, Páez Monzón, Sección: 01</option>');
      }
    }else{
      var $selectprofesores = $('select[name=profesores]');
      $selectprofesores.empty();
      $selectprofesores.
          append('<option value="">Seleccione una Materia</option>');
      $selectprofesores.prop('disabled',true);
    }
  });
  $('#horario-clase>tbody').on('click',function (e) {
    console.log( event.target.id );
    $('#'+event.target.id).html('hola');
    console.log( $( event.target ).children());
  });
  $('input[name=horas]').on('change',function (e) {
    var $clases = $('select[name=int-clases]');
    if($(this).val() < 1 || $(this).val() > 6){
      $(this).val('1');
      $clases.empty();
       $clases.prop('disabled',true);
       $clases.append('<option value="">Seleccione el intervalo</option>');
    }else{
      console.log('cambio');
      $clases.prop('disabled',false);
      $clases.empty();
      for(i = 1; i <= $(this).val() ; i++){
        $clases.append('<option value="'+i+'">'+i+'</option>');
      }
    }
  });
  $('input[name=dias]').on('click',function(e) {

  });
});