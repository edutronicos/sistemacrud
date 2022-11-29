<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    
    public function index()
    {
        $dados = Image::all();
        return view('documentos.logos.logo-index', compact('dados'));
    }

    
    public function create()
    {
        return view('documentos.logos.logo-novo');
    }

    
    public function store(Request $request)
    {
        $extensao = $request->arquivo->getClientOriginalextension();
        $nomeempresa = $request->nome_empresa;
        $nomelogo = $nomeempresa . '.' . $extensao;
        $caminho = $request->arquivo->storeAs('Logos', $nomelogo, 'public');
        
        //dd($nomecertificado);
        Image::create([
            'nome' => $nomeempresa,
            'tamanho' => $request->tamanho,
            'arquivo' => $caminho
        ]);

        return redirect('/logos');
    }

    
    public function destroy(Image $image, $id)
    {
        Image::find($id)->delete();

        return redirect('/logos');
    }
}
