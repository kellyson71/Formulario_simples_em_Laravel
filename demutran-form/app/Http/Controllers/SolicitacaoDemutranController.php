<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SolicitacaoDemutran;

class SolicitacaoDemutranController extends Controller
{
    public function create()
    {
        return view('solicitacao.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tipo_solicitacao' => 'nullable|string|max:255',
            'nome' => 'nullable|string|max:255',
            'telefone' => 'nullable|string|max:20',
            'email' => 'nullable|string|email|max:255',
            'assunto' => 'nullable|string|max:255',
            'descricao' => 'nullable|string',
            'doc_requerimento_url' => 'nullable|string|max:255',
            'cnh_url' => 'nullable|string|max:255',
            // Validações para os outros campos...
        ]);

        SolicitacaoDemutran::create($data);

        return redirect('/solicitacao/create')->with('success', 'Solicitação enviada com sucesso!');
    }
}