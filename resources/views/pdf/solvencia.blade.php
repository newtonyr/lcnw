<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


  <style>
    body{
      font-family: arial;
      color: black;
      background-color: white;
    }
    h1,h2,h3,h4,h5,h6{
      text-transform: uppercase;
    }
    p{
      margin-left: 40px;
      margin-right: 40px;
      font-size: 20px;
    }
    .text-left{
      text-align: left;
    }
    .text-justify{
      text-align: justify;
    }
    .text-center{
      text-align: center;
    }

  </style>
</head>
<body>
  <p class="text-left">
  Universidad de los Andes. <br>
  Facultad de Ingeniería. <br>
  Escuela de Ingeniería de Sistemas. <br>
  Departamento de Computación. <br>
  Laboratorio de Computación “Nikolaus Walczuch”. <br>
  Venezuela, Estado Mérida. <br>
  </p>
  <br><br><br>
    <h2 class="text-center">Solvencia</h2>
    <br><br>
    <p class="text-justify">
      Quien suscribe, Coordinador del Laboratorio de Computación “Nikolaus Walczuch”, de la Escuela de Ingeniería de Sistemas de la Universidad de Los Andes, hace constar por medio de la presente que <strong>{{isset($data) ? $data['nombre'] : 'XXXXXXXXXX XXXXXXXX'}}</strong>, portador de la cédula de identidad No. <strong>{{isset($data) ? $data['cedula'] : 'X-999.999.999'}}</strong>, se encuentra solvente con dicho Laboratorio.
    </p>
    <p class="text-justify">
      Constancia que se expide a solicitud de la parte interesada en la Ciudad de Mérida el día {{isset($data) ? $data['dia']:'XX'}} del mes de {{isset($data) ? $data['mes']:'XXXXXXXXXX'}} del año {{isset($data) ? $data['anio']:'XXXX'}}.
    </p>
    <p class="text-center">
      Ing. Alejandro Mujica <br>
      C.I. V-15.448.475 <br>
      Coordinador del Laboratorio <br>
    </p>


</body>
</html>