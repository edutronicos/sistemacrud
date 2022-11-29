@extends('layouts.layout')

@section('title', 'Almoxarifado')

@section('content')
<div class="flex h-full">
    
    <!-- Menu Lateral -->
    @include('controle.almoxarifado.menu-lat')
    <!-- Menu Lateral -->

    <!-- Conteúdo Página-->
    <div class=" w-full bg-gray-300 text-white">
        <div class="m-12">

        <h1 class="font-semibold text-2xl text-slate-700">CONTROLE PARA ALMOXARIFADO</h1>

        <a href="/almoxarifado_create"><button class="mt-4 mb-12 w-40 h-12 bg-slate-700 rounded shadow-md hover:scale-90">Novo Item - <i class="bi bi-file-earmark-plus-fill text-xl"></i></button></a>

        <h4 class="text-lg text-slate-700">Informe a saída de itens:</h4>
                
        <div class="mt-2 p-6 rounded-lg bg-slate-700 w-full max-w-2xl shadow-lg">
            <form action="/almoxarifado_store_saida" method="post">
                @csrf
                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">Setor</label>
                    </div>
                    <div class="w-2/3">
                        <select class="w-full p-2 rounded-lg font-bold text-gray-600" name="setor" id="setor">
                            <option value="Financeiro">Financeiro</option>
                            <option value="Informática">Informática</option>
                            <option value="Jurídico">Jurídico</option>
                            <option value="Licitação">Licitação</option>
                            <option value="Recrutamento">Recrutamento</option>
                            <option value="Recepção">Recepção</option>
                            <option value="RH">RH</option>
                            <option value="Supervisão">Supervisão</option>
                        </select>
                    </div>
                </div>

                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">Funcionário :</label>
                    </div>
                    <div class="w-2/3">
                        <input class="w-full rounded-lg font-bold text-gray-600" type="text" name="funcionario" id="funcionario">
                    </div>
                </div>

                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">Selecione o Item :</label>
                    </div>
                    <div class="w-2/3">
                        <select class="w-full p-2 rounded-lg font-bold text-gray-600" name="setor" id="setor">
                            <option value="Financeiro">Financeiro</option>
                            <option value="Informática">Informática</option>
                            <option value="Jurídico">Jurídico</option>
                            <option value="Licitação">Licitação</option>
                            <option value="Recrutamento">Recrutamento</option>
                            <option value="Recepção">Recepção</option>
                            <option value="RH">RH</option>
                            <option value="Supervisão">Supervisão</option>
                        </select>
                    </div>
                </div>
                
                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">Quantidade :</label>
                    </div>
                    <div class="2/3">
                        <input class="w-full rounded-lg font-bold text-gray-600" type="number" name="quantidade" id="quantidade">
                    </div>
                </div>

                <div class="flex justify-center mt-12">
                    <button class="bg-blue-400 w-40 h-8 rounded shadow shadow-white hover:shadow-black" type="submit">Registrar</button>
                </div>
            </form>
        </div>

        </div>
    </div>
    <!-- Conteúdo Página-->
</div>


@endsection