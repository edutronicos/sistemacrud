<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Models\ExitInventory;

class InventoryController extends Controller
{
    
    public function index()
    {
        return view('controle.almoxarifado.almoxarifado-index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        //
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
        //
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
