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
  <p class="text-justify">
  Solvencia del Bachiller. <strong>{{isset($data) ? $data['nombre'] : ''}}</strong>,cedula de identidad: <strong>{{isset($data) ? $data['cedula'] : ''}}</strong>.
  </p>
  <p class="text-center">
    Ing. Alejandro Mujica <br>
    C.I. V-15.448.475 <br>
    Coordinador del Laboratorio <br>
  </p>


</body>
</html>