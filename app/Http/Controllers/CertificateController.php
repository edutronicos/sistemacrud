<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    
    public function index()
    {
        $dados = Certificate::all();

        return view('documentos.certificado.certificado-index', compact('dados'));
    }

    
    public function create()
    {
        return view('documentos.certificado.certificado-novo');
    }

    
    public function store(Request $request)
    {
        $extensao = $request->arquivo->getClientOriginalextension();
        $nomeempresa = $request->nome_empresa;
        $nomecertificado = $nomeempresa . '.' . $extensao;
        $caminho = $request->arquivo->storeAs('Certificado', $nomecertificado, 'public');
        
        //dd($nomecertificado);
        Certificate::create([
            'nome' => $nomeempresa,
            'validade' => $request->validade,
            'arquivo' => $caminho
        ]);

        return redirect('/certificado');
    }

        
    public function destroy(Certificate $certificate, $id)
    {
        Certificate::find($id)->delete();

        return redirect('/certificado');
    }
}
