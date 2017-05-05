<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SolvenciaMail extends Mailable
{
  use Queueable, SerializesModels;
  protected $data;
  public function __construct($d)
  {
    $this->data = $d;
  }

  public function build()
  {
    return $this->view('email.solvencia')
                ->with(['data'=>$this->data])
                ->subject('Solvencia de '.$this->data['nombre'])
                ->from('lcnw@ula.ve','Laboratorio de Computación “Nikolaus Walczuch”')
                ->attach($this->data['archivo']);
  }
}
