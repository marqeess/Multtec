<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    // Encaminhar pra view de inicio ---------------------------------------------
    public function inicio()
    {
        return view('inicio');
    }

    // Encaminhar pra view de contato --------------------------------------------
    public function contato()
    {
        return view('contato');
    }

    // Enviar o contato para o BD ------------------------------------------------
    public function enviarcontato()
    {
        return view('contato');
    }

    // Encaminhar pra view de sobre ----------------------------------------------
    public function sobre()
    {
        return view('sobre');
    }
    
}
