<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Models\ExitInventory;

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
        $itens = ExitInventory::all();

        return view('controle.almoxarifado.almoxarifado-consulta-item', compact('itens'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        $itens = Inventory::all();

        return view('controle.almoxarifado.almoxarifado-entrada-item', compact('itens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        $item1 = Inventory::find($request->item);
        $item1->quantidade = $item1->quantidade + $request->quantidade;
        $item1->save();

        return redirect('/almoxarifado_entrada_item')->with('msg', 'true');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        //
    }
}
