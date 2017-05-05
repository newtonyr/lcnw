<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Mail\SolvenciaMail;

class AdminController extends Controller
{
  protected $dias;
  protected $meses;
  protected $anios;
  public function __construct()
  {
    $this->dias =  collect(['01'=>'uno','02'=>'dos','03'=>'tres','04'=>'cuatro','05'=>'cinco','06'=>'seis','07'=>'siete','08'=>'ocho','09'=>'nueve','10'=>'diez','11'=>'once','12'=>'doce','13'=>'trece','14'=>'catorce','15'=>'quince','16'=>'dieciséis','17'=>'diecisiete','18'=>'dieciocho','19'=>'diecinueve','20'=>'veinte','21'=>'veintiuno','22'=>'veintidós','23'=>'veintitres','24'=>'veinticuatro','25'=>'veinticinco','26'=>'veintiséis','27'=>'veintiietes','28'=>'veintiocho','29'=>'veintinueve','30'=>'treinta','31'=>'treinta y uno']);
    $this->meses = collect(['01'=>'Enero','02'=>'Febrero','03'=>'Marzo','04'=>'Abril','05'=>'Mayo','06'=>'Junio','07'=>'Julio','08'=>'Agosto','09'=>'Septiembre','10'=>'Octubre','11'=>'Novienbre','12'=>'Diciembre']);
    $this->anios = collect(['2017'=>'dos mil diecisiete','2018'=>'dos mil dieciocho','2019'=>'dos mil diecinueve','2020'=>'dos mil veinte','2021'=>'dos mil veintiuno','2022'=>'dos mil veintidós','2023'=>'dos mil veintitres','2024'=>'dos mil veinticuatro','2025'=>'dos mil veinticinco','2026'=>'dos mil veintiséis','2027'=>'dos mil veintisiete','2028'=>'dos mil veintiocho','2029'=>'dos mil veintinueve','2030'=>'dos mil treinta']);
  }
  public function index(Request $request)
  {
    return view('admin.index');
  }
  public function solvencia(Request $request)
  {
    return view('admin.solvencia');
  }
  public function profesores(Request $request)
  {
    return view('admin.profesores');
  }
  public function horarios(Request $request)
  {
    return view('admin.horarios');
  }
  public function configuracion(Request $request)
  {
    return view('admin.configuracion');
  }
  public function postsolvencia(Request $request)
  {
    if(isset($request->nombre) && isset($request->cedula) && isset($request->fecha)){
      $_url = 'pdf/solvencias/';
      $_url .= 'solvencia_'.$request->nombre.'_.pdf';
      $data = [
              'nombre'=>$request->nombre,
              'cedula'=>$request->cedula,
              'anio'=>$this->anios[substr($request->fecha, 0,4)],
              'mes'=>$this->meses[substr($request->fecha, 5,2)],
              'dia'=>$this->dias[substr($request->fecha, 8,2)],
              'archivo' => $_url
            ];
      $pdf = \PDF::loadView('pdf.solvencia',['data'=>$data]);
      $pdf->save($_url);
      //Correo es judithm@ula.ve
      \Mail::to('newtonyr@gmail.com')->send(new SolvenciaMail($data));
      $msj = 'Solvencia enviada.';
      return redirect()->route('admin.solvencia')->with(compact('msj'));
    }else{
      $error = 'Error, los Campos NOMBRE y CEDULA son requeridos';
      return redirect()->route('admin.solvencia')->with(compact('error'));
    }

  }
  public function mailsolvencia(Request $request)
  {
    return view('email.solvencia');
  }
}
