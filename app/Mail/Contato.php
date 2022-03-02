<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contato extends Mailable
{
    use Queueable, SerializesModels;

    public $nome, $email, $celular, $explicacao;

    public function __construct($nome, $email, $celular, $explicacao){
        
        $this->nome = $nome;
        $this->email = $email;
        $this->celular = $celular;
        $this->explicacao = $explicacao;
    }

    public function build(){

        return $this->view('emails.contato');
    }
}
