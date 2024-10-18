<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Models\Image;
Use App\Mail\TrabalheMail;

class TrabalheController extends Controller
{

    public $dados;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('trabalhe-conosco');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = date('Y').'-'.date('m').'-'.date('d');
        $anexo = new Image();

        $request->validate([
            'nome' => 'required', 
            'email' => 'required',
            'telefone' => 'required',
            'local' => 'required',
            'endereco' => 'required',
            'area' => 'required',
            'mensagem' => 'required',
            'curriculo' => 'required',
        ]);

        $dados = array(

            'nome' => $request->nome, 
            'email' => $request->email,
            'telefone' => $request->telefone,
            'local' => $request->local,
            'endereco' => $request->endereco,
            'area' => $request->area,
            'mensagem' => $request->mensagem,
            'currículo' => $request->curriculo,
            'caminho' => public_path('/images/uploads/curriculo/'.$data.'/'.$anexo->imageUpload($request->file('curriculo'),'/images/uploads/curriculo/'.$data.'/')),
        );


        Mail::to(config('mail.from.address'))
        ->send(new TrabalheMail($dados));

        return redirect('/trabalhe-conosco')->with('success', 'Em breve entraremos em contato');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
