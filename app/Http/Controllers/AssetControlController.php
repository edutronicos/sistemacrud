<?php

namespace App\Http\Controllers;

use App\Models\AssetControl;
use Illuminate\Http\Request;

class AssetControlController extends Controller
{
    
    public function index()
    {
        $search = request('search');

        if($search)
        {
            $dados = AssetControl::where('grupo', 'like', '%' . $search . '%')->
                            orWhere('setor', 'like', '%'. $search .'%')->
                            orWhere('codigo', 'like', '%'. $search .'%')->
                            orWhere('produto', 'like', '%'. $search .'%')->
                            orWhere('marca', 'like', '%'. $search .'%')->
                            orWhere('perifericos', 'like', '%'. $search .'%')->
                            orWhere('data_entrada', 'like', '%'. $search .'%')->get();
        }
        else
        {
            $dados = AssetControl::all();
        }


        

        return view('controle.patrimonial.index', compact('dados', 'search'));
    }

    
    public function create_info()
    {
        return view('controle.patrimonial.novo-informatica');
    }

    public function create_movel()
    {
        return view('controle.patrimonial.novo-moveis');
    }

    
    public function store(Request $request)
    {
        //dd($request->perifericos);
        if ($request->perifericos) {

            $request->perifericos  = implode(',', $request->perifericos);
            
            AssetControl::create([
                'grupo'         => $request->grupo,
                'setor'         => $request->setor,
                'codigo'        => $request->codigo,
                'produto'       => $request->produto,
                'marca'         => $request->marca,
                'cor'           => $request->cor,
                'perifericos'   => $request->perifericos,
                'data_entrada'  => $request->data_entrada,
                'descricao'     => $request->descricao
            ]);
        } else {
            AssetControl::create([
                'grupo'         => $request->grupo,
                'setor'         => $request->setor,
                'codigo'        => $request->codigo,
                'produto'       => $request->produto,
                'marca'         => $request->marca,
                'cor'           => $request->cor,
                'perifericos'   => 'Não-Possui',
                'data_entrada'  => $request->data_entrada,
                'descricao'     => $request->descricao
            ]);
        }
        
        
        

        return redirect('/patrimonial');
    }


    public function order($id)
    {
        $dados = AssetControl::orderBy($id, 'asc')->get();

        return view('controle.patrimonial.index', compact('dados'));
    }
    

    
    public function edit(AssetControl $assetControl, $id)
    {
        $dados = AssetControl::find($id);

        if ($dados->grupo == "Informática") {
            return view('controle.patrimonial.edit-informatica', compact('dados'));

        } else {
            return view('controle.patrimonial.edit-moveis', compact('dados'));
        }
    
    }

    
    public function update(Request $request, AssetControl $assetControl, $id)
    {
        if ($request->perifericos) {
            $request->perifericos = implode(',', $request->perifericos);
            
            AssetControl::find($id)->update([
                'grupo'         => $request->grupo,
                'setor'         => $request->setor,
                'codigo'        => $request->codigo,
                'produto'       => $request->produto,
                'marca'         => $request->marca,
                'cor'           => $request->cor,
                'perifericos'   => $request->perifericos,
                'data_entrada'  => $request->data_entrada,
                'descricao'     => $request->descricao
            ]);

        } else {
            AssetControl::find($id)->update([
                'grupo'         => $request->grupo,
                'setor'         => $request->setor,
                'codigo'        => $request->codigo,
                'produto'       => $request->produto,
                'marca'         => $request->marca,
                'cor'           => $request->cor,
                'perifericos'   => 'Não-Possui',
                'data_entrada'  => $request->data_entrada,
                'descricao'     => $request->descricao
        ]);

        }
        
        return redirect('/patrimonial');
        
    }

    
    public function destroy(AssetControl $assetControl, $id)
    {
        AssetControl::find($id)->delete();

        return redirect('/patrimonial');
    }
}
