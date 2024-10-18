<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OuvidoriaMail extends Mailable
{
    use Queueable, SerializesModels;
    public $dados;
    /**
     * Create a new message instance.
     */
    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    public function build()
    {
        return $this
        ->from(config('mail.from.address'))
        ->subject('Novo contato recebido! | Site Agrofértil')
        ->view('contato.mensagem')
        ->view('mensagem',$this->dados);
    }
}
