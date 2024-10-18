<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
Use App\Mail\ContatoMail;

class OuvidoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ouvidoria');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required', 
            'email' => 'required',
            'telefone' => 'required',
            'assunto' => 'required',
            'mensagem' => 'required',
        ]);

        $dados = array(

            'nome' => $request->nome, 
            'email' => $request->email,
            'telefone' => $request->telefone,
            'assunto' => $request->assunto,
            'mensagem' => $request->mensagem,
        );

        Mail::to(config('mail.from.address'))
        ->send(new ContatoMail($dados));

        return redirect('/contato')->with('success', 'Em breve entraremos em contato');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
