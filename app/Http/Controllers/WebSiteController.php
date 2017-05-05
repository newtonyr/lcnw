<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebSiteController extends Controller
{
  public function index(Request $request)
  {
    return view('layouts.inicio');
  }
  public function nikolaus(Request $request)
  {
    return view('layouts.nikolaus');
  }
  public function enlaces(Request $request)
  {
    return view('layouts.enlaces');
  }
  public function profesores(Request $request)
  {
    return view('layouts.profesores');
  }
  public function preparadores(Request $request)
  {
    return view('layouts.preparadores');
  }
  public function coordinador(Request $request)
  {
    return view('layouts.coordinador');
  }
  public function becarios(Request $request)
  {
    return view('layouts.becarios');
  }
  public function contacto(Request $request)
  {
    return view('layouts.contacto');
  }
}
