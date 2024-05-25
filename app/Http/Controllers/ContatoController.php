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

        try {
            // Enviar o email
            Mail::to('contato@ghctecnologia.com')->send(new ContatoMail($request->all()));
    
            // Retornar a view de sucesso se o e-mail for enviado com sucesso
            return view('site-ghc.contato-sucesso');
        } catch (Exception $e) {
            // Registrar o erro para fins de debug
            //Log::error('Erro ao enviar email: ' . $e->getMessage());
    
            // Retornar uma view de erro ou redirecionar com uma mensagem de erro
            return view('site-ghc.contato-erro');
        }
    }
}