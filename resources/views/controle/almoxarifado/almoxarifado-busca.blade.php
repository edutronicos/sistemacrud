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

        <h1 class="font-semibold text-2xl text-slate-700">BUSCA AVANÇADA</h1>

        <h4 class="text-lg text-slate-700">Escolha uma ou mais opções para realizar a busca :</h4>
                
        <div class="mt-2 p-6 rounded-lg bg-slate-700 w-full max-w-2xl shadow-lg">
            <form action="/almoxarifado_busca_show" method="get">
                @csrf
                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">Setor</label>
                    </div>
                    <div class="w-2/3">
                        <select class="w-full p-2 rounded-lg font-bold text-gray-600" name="setor" id="setor">
                            <option value=""></option>
                            <option class=" font-medium" value="Arquivo">Arquivo</option>
                            <option class=" font-medium" value="Financeiro">Financeiro</option>
                            <option class=" font-medium" value="Informática">Informática</option>
                            <option class=" font-medium" value="Jurídico">Jurídico</option>
                            <option class=" font-medium" value="Licitação">Licitação</option>
                            <option class=" font-medium" value="Recepção">Recepção</option>
                            <option class=" font-medium" value="Recrutamento">Recrutamento</option>
                            <option class=" font-medium" value="RH">RH</option>
                            <option class=" font-medium" value="Supervisão">Supervisão</option>
                            <option class=" font-medium" value="Telefonista">Telefonista</option>
                        </select>
                    </div>
                </div>

                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">Funcionário :</label>
                    </div>
                    <div class="w-2/3">
                        <input class="w-full p-2 rounded-lg font-bold text-gray-600" type="text" name="funcionario" id="funcionario">
                    </div>
                </div>

                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">Selecione o Item :</label>
                    </div>
                    <div class="w-2/3">
                        <select class="w-full p-2 rounded-lg font-bold text-gray-600" name="material" id="material">
                            <option value=""></option>
                        @foreach ( $itens2 as $item )
                            <option value="{{$item->material}}">{{$item->material}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">Data Inicio :</label>
                    </div>
                    <div class="2/3">
                        <input class="rounded-lg font-bold text-gray-600" type="date" name="data_ini" id="data_ini">
                    </div>
                </div>

                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">Data Final :</label>
                    </div>
                    <div class="2/3">
                        <input class="rounded-lg font-bold text-gray-600" type="date" name="data_fim" id="data_fim">
                    </div>
                </div>

                <div class="flex justify-center mt-12">
                    <button class="bg-blue-400 w-40 h-8 rounded shadow shadow-white hover:shadow-black" type="submit">Pesquisar</button>
                </div>
            </form>
        </div>

            @if (session('erro'))
                <div class="mt-12 p-6 rounded-lg bg-green-200 w-full max-w-2xl shadow-lg">
                    <h1 class="text-black text-center">Não encontrado !!!</h1>
                </div>
            @endif

        </div>
    </div>
    <!-- Conteúdo Página-->
</div>


@endsection