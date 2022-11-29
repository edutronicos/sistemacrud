<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    
    public function index()
    {
        
        return view('documentos.documentos-index');
    }

    public function show()
    {
        $dados = Document::orderBy('nome', 'asc')->get();
        return view('documentos.cnpj.cnpj-index', compact('dados'));
    }

    
    public function create()
    {
        return view('documentos.cnpj.cnpj-novo');
    }

    
    public function store(Request $request)
    {
        $extensao = $request->cartao_cnpj->extension();
        $nomecartao = $request->nome_cnpj . '.' . $extensao;

        $caminho = $request->cartao_cnpj->storeAs('documentos', $nomecartao, 'public');

        Document::create([
            'nome' => $request->nome_cnpj,
            'cnpj' => $request->numero_cnpj,
            'cartao' => $caminho
        ]);
        
        return redirect('/documentos_index');
        
    }

    
    public function destroy(Document $document, $id)
    {
        Document::find($id)->delete();

        return redirect('/documentos_index');
    }
}
