@extends('layouts.base')
@section('title','LCNW')

@section('script')
  <script>
    $('#1').addClass('active');
  </script>
@endsection

@section('content-body')
<div class="container">
  <div class="row">
    <hr>
    <h3>Bienvenidos.</h3>
    <h4>Misión.</h4>
    <p class="text-justify">
    El Laboratorio de Computación Nikolaus Walczuch (LCNW) tiene como misión fundamental la enseñanza y el fomento de la práctica de las ciencias de la computación a través de la programación
    </p>
    <h4>Objetivo.</h4>
    <p class="text-justify">
      Dar soporte a las actividades académicas de la carrera Ingeniería de Sistemas de la Universidad de Los Andes (EISULA), especialmente el dictado de las materias:
    </p>
    <ul>
      <li>Programación 1. (PR1).</li>
      <li>Programación 2. (PR2).</li>
      <li>Programación 3. (PR3).</li>
      <li>Arquitectura de Computadoras.</li>
      <li>Diseño y Análisis de Algoritmo. (AyDA).</li>
    </ul>
    <p class="text-justify">
Todas ellas pertenecientes al Ciclo Básico de Ingeniería de Sistemas.
    </p>
    <h3>Horario de Clases en el Laboratorio. Semestre A2017</h3>
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover" id="hor-lab">
        <thead>
          <tr id="hor-lab-thead">
            <th>Hora</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miercoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sabado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="hor">8:00 am a <br> 10:00 am</td>
            <td id="pr1">PR1. <br>Sec: 02.</td>
            <td id="pr2">PR2. <br>Sec:02</td>
            <td id="pr3">PR3 <br>Sec:01</td>
            <td id="pr2">PR2. <br>Sec:02</td>
            <td id="arq">Arq. Comp <br> Sec:01.</td>
            <td></td>
          </tr>
          <tr>
            <td id="hor">10:00 am a <br> 12:00 pm</td>
            <td></td>
            <td id="pr1">PR1. <br> Sec: 01.</td>
            <td id="pr1">PR1. <br> Sec: 03</td>
            <td id="pr1">PR1. <br> Sec: 01.</td>
            <td id="pr3">PR3 <br>Sec:02.</td>
            <td></td>
          </tr>
          <tr>
            <td id="hor">12:00 pm a <br> 2:00 pm</td>
            <td id="preparadores">Joshua Molina</td>
            <td id="preparadores">Jesus Caceres</td>
            <td id="preparadores">Miguelangel Alcalá</td>
            <td id="preparadores">Victor Albornoz</td>
            <td id="preparadores">Nerio Jose Moran Paez</td>
            <td></td>
          </tr>
          <tr>
            <td id="hor">2:00 pm a <br> 4:00 pm</td>
            <td></td>
            <td id="pr2">PR2. <br> Sec:01.</td>
            <td id="pr2">PR2. <br> Sec:01.</td>
            <td id="pr2">PR2. <br> Sec:01.</td>
            <td id="pr1"> PR1. <br> Sec:04</td>
            <td></td>
          </tr>
          <tr>
            <td id="hor">4:00 pm a <br> 6:00 pm</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

    <ul>
      <li>Profesores de Programacion 1, A2017.
        <ul>
          <li>Profesor: Jesus Alberto, Perez Angulo, Sección: 01.</li>
          <li>Profesora: Hilda Yelitza, Contreras Zambrano, Sección: 02.</li>
        </ul>
      </li>
      <li>Profesores de Programacion 2, A2017.
        <ul>
          <li>Profesor: Rafael, Rivas Estrada, Sección: 01.</li>
          <li>Profesor: Junior Amilcar, Altamiranda Pérez, Sección: 02.</li>
        </ul>
      </li>
      <li>Profesores de Programacion 3, A2017.
        <ul>
          <li>Profesor: Jesus Alberto, Perez Angulo, Sección: 01.</li>
          <li>Profesor: Alejandro, Mujica, Sección: 02.</li>
        </ul>
      </li>
      <li>Profesores de Arquitectura de Computadoras, A2017.
        <ul>
          <li>Profesor: Gerard, Páez Monzón, Sección: 01.</li>
        </ul>
      </li>

    </ul>
  </div>
</div>
@endsection