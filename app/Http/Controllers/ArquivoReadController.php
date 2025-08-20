<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arquivo;

class ArquivoReadController extends Controller
{

    public function show($arquivoId)
    {
        // Pega o registro do arquivo para acessar o hash
        $arquivo = Arquivo::findOrFail($arquivoId);

        // Busca todas as linhas importadas do mesmo arquivo
        $dados = Arquivo::where('file_hash', $arquivo->file_hash)->get();

        return response()->json([
            'status' => 'success',
            'data' => $dados
        ]);
    }
}
