<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HistoricoCollection;
use App\Http\Resources\HistoricoResource;
use App\Models\Historico;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    /**
     * @var Historico
     */
    private $historico;

    public function __construct(Historico $historico)
    {
        $this->historico = $historico;
    }

    //Função que retorna o histórico completo
    public function index()
    {
        $historico = $this->historico->all();

        return response()->json($historico);
    }

    //Função para salvar o histórico
    public function salvar(Request $request)
    {
        $data = $request->all();
        $historico = $this->historico->create($data);
        return response()->json($historico);
    }

    // Função para retornar o histórico de uma cidade
    public function consultar(Request $request)
    {
        // Validação do parâmetro no corpo da requisição
        $validated = $request->validate([
            'cidade' => 'required|string',
        ]);

        $cidade = $validated['cidade'];

        // Buscar registros que correspondem à cidade fornecida
        $historico = Historico::where('cidade', $cidade)->get();

        // Retornar a consulta
        return response()->json($historico);
    }
}
