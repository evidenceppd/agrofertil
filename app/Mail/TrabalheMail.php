<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TrabalheMail extends Mailable
{
    use Queueable, SerializesModels;
    public $dados;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from(config('mail.from.address'))
        ->subject('Novo cadastro de Trabalhe Conosco | Agrofértil')
        ->attach($this->dados['caminho'], [
            'mime' => 'application/pdf',
        ])
        ->view('contato.trabalhe')
        ->view('trabalhe',$this->dados);
    }
}
