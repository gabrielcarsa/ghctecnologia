<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoMail;

class ContatoController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'celular' => 'nullable|string|max:20',
            'mensagem' => 'required|string',
        ]);

        // Enviar o email
        Mail::to('contato@ghctecnologia.com')->send(new ContatoMail($request->all()));

        //TODO: Validar
        return view('site-ghc/contato-sucesso');
    }
}
