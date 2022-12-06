<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Models\ExitInventory;
use PhpParser\Node\Stmt\ElseIf_;

class InventoryController extends Controller
{
    
    public function index()
    {
        $itens = Inventory::all();

        return view('controle.almoxarifado.almoxarifado-index', compact('itens'));
    }

    
    public function create()
    {
        return view("controle.almoxarifado.almoxarifado-novo-item");
    }

    
    public function store_novo_item(Request $request)
    {
        //dd($request);

        Inventory::create([
            'material'      => $request->nome,
            'quantidade'    => $request->quantidade
        ]);

        return redirect('/almoxarifado_create')->with('msg', 'Item cadastrado com sucesso !!!');
    }

    
    public function store_saida(Request $request)
    {
        $item1 = Inventory::find($request->item);
        $item1->quantidade = $item1->quantidade - $request->quantidade;
        $item1->save();


        

        ExitInventory::create([
            'material'      =>$item1->material,
            'setor'         =>$request->setor,
            'funcionario'   =>$request->funcionario,
            'quantidade'    =>$request->quantidade
        ]);

        return redirect('/almoxarifado')->with('msg', 'true');
    }

    public function show(Inventory $inventory)
    {
        $itens = ExitInventory::orderBy('created_at', 'desc')->get();

        return view('controle.almoxarifado.almoxarifado-consulta-item', compact('itens'));
    }

    
    public function edit(Inventory $inventory)
    {
        $itens = Inventory::all();

        return view('controle.almoxarifado.almoxarifado-entrada-item', compact('itens'));
    }

    
    public function update(Request $request, Inventory $inventory)
    {
        $item1 = Inventory::find($request->item);
        $item1->quantidade = $item1->quantidade + $request->quantidade;
        $item1->save();

        return redirect('/almoxarifado_entrada_item')->with('msg', 'true');
    }


    public function busca(Request $request)
    {
        $itens  = ExitInventory::all();
        $itens2 = Inventory::all();
        return view('controle.almoxarifado.almoxarifado-busca', compact('itens', 'itens2'));
    }

    public function busca_show(Request $request)
    {
        //dd($request);

        $filtro = ExitInventory::query()->orderBy('created_at', 'asc');

        $busca = $request->only('material', 'setor', 'funcionario');
        $data_inicio = $request->data_ini;
        $data_fim = $request->data_fim;

        if ($data_inicio && $data_fim) {
            foreach ($busca as $nome => $valor) {
                if($valor)  {
                    $filtro->where($nome, 'LIKE', '%' . $valor . '%');
                }
            }
            $filtro->whereDate('created_at', '>=', $data_inicio);
            $filtro->whereDate('created_at', '<=', $data_fim);
        } else {
            foreach ($busca as $nome => $valor) {
                if($valor)  {
                    $filtro->where($nome, 'LIKE', '%' . $valor . '%');
                }
            }
        }
        
        $itens = $filtro->paginate();
        //dd($itens->items());

        if (empty($itens->items())) {
            return redirect('/almoxarifado_busca')->with('erro', 'Não encontrado');
        } else {
            return view('controle.almoxarifado.almoxarifado-busca-show', compact('itens'));
        }
        
    }

    public function papeis(Request $request)
    {
        $setor = $request->setor;
        $mes = $request->mes;
        //$conta = ExitInventory::where('material', 'RESMA PAPEL A4')->get();     //filtro para fazer a conta de resmas
        $saida = ExitInventory::query();                                        //cria o filtro que vai ser retornado
        $saida->where('material', 'RESMA PAPEL A4');                            //deixa fixo só para o material PAPEL A4

            if ($setor) {                                                       //só adiciona o filtro se vir algo do request
                $saida->where('setor', $setor);
            }
            if ($mes) {                                                         //só adiciona o filtro se vir algo do request
                $saida->whereMonth('created_at', $mes);
            }
            
            $estoque = Inventory::where('material', 'RESMA PAPEL A4')->get();   //pega o valor de quantas resmas tem no estoque
            $total = 0;                                                         //variavel para fazer a conta
                                                                    
            $itens = $saida->paginate();

            foreach ($itens as $key => $value) {                                //um foreach para guardar na variavel total o resultado
                $total += $value->quantidade;
            }

            
            return view('controle.almoxarifado.almoxarifado-papeis', compact('itens', 'estoque', 'total'));

    }


    public function destroy(Inventory $inventory)
    {
        //
    }
}
