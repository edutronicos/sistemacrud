<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    
    public function index()
    {
        $dados = Paper::all();

        return view('documentos.timbrado.timbrado-index', compact('dados'));
    }

    
    public function create()
    {
        return view('documentos.timbrado.timbrado-novo');
    }

    
    public function store(Request $request)
    {
        $extensao = $request->arquivo->extension();
        $nometimbrado = $request->nome_empresa . '.' . $extensao;

        $caminho = $request->arquivo->storeAs('Timbrado', $nometimbrado, 'public');

        Paper::create([
            'nome' => $request->nome_empresa,
            'tipo' => $request->tipo,
            'arquivo' => $caminho
        ]);
        
        return redirect('/timbrado');
    }

    
    public function destroy(Paper $paper, $id)
    {
        Paper::find($id)->delete();

        return redirect('\timbrado');
    }
}
