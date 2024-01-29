<?php

namespace App\Http\Controllers;

use App\Models\Contatos;
use Illuminate\Http\Request;
use App\Mail\Contato;
use Illuminate\Support\Facades\Mail;

class ContatosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contato');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sent = Mail::to('lucasao744@gmail.com', 'Lucas Araujo')->send(new Contato([
            'fromName' => $request->input('nome'),
            'fromEmail' => $request->input('email'),
            'subject' => $request->input('detalhes'),
        ]));
        var_damp('Email enviado', $sent);
    }
}
