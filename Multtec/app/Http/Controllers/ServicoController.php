<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    
    // Exibir a lista de serviços recentes --------------------------------------
    public function index()
    {
        //
    }

    // Exibir a view de cadastro de serviços ------------------------------------
    public function create()
    {
        //
    }

    // Salvar dados do serviço no BD --------------------------------------------
    public function store(Request $request)
    {
        //
    }

    // Salvar dados editados do serviço alterado --------------------------------
    public function update(Request $request, Servico $servico)
    {
        //
    }

    // Apagar o serviço do BD ---------------------------------------------------
    public function destroy(Servico $servico)
    {
        //
    }
}
