<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    
    // Exibir a lista de serviços recentes --------------------------------------
    public function index()
    {
        $servicos = Servico::paginate(10);

        return view('admin.servicos', compact('servicos'));
    }

    // Salvar dados do serviço no BD --------------------------------------------
    public function store(Request $request)
    {
        $servicos = new Servico;
        $servicos->nome = $request->nome;
        $servicos->celular = $request->celular;
        $servicos->telefone = $request->telefone;
        $servicos->descricao = $request->descricao;
        $servicos->data = $request->data;
        $servicos->valor = $request->valor;
        $servicos->status = $request->status;
        $servicos->save();

        Session::flash('flash_message', 'Serviço cadastrado com sucesso.');

        return redirect('admin/servicos');
    }

    // Salvar dados editados do serviço alterado --------------------------------
    public function update(Request $request, Servico $servico)
    {
        $servicos = Servico::find($servico->id);
        $servicos->nome = $request->nome;
        $servicos->celular = $request->celular;
        $servicos->telefone = $request->telefone;
        $servicos->descricao = $request->descricao;
        $servicos->data = $request->data;
        $servicos->valor = $request->valor;
        $servicos->status = $request->status;
        $servicos->save();

        Session::flash('flash_message', 'Serviço editado com sucesso.');

        return redirect('admin/servicos');
    }

    // Apagar o serviço do BD ---------------------------------------------------
    public function destroy(Servico $servico)
    {
        $servicos = Servico::find($servico->id);
        $servicos->delete();

        Session::flash('flash_message', 'Serviço excluido com sucesso.');

        return redirect('admin/servicos');
    }
}
