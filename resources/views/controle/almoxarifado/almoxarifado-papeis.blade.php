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
            <div class="flex flex-row justify-between">


                <div class="flex flex-col">
                    <form action="/ctrl_papeis" method="get">
                        <h1 class="w-48 text-gray-700 font-semibold ">Filtrar por: </h1>
                        <select class="w-full p-2 h-8 rounded-lg font-bold text-gray-600 text-xs" name="setor" id="setor">
                                <option class=" font-medium" value="todos">Setor</option>
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
                            <select class="mt-2 w-full p-2 h-8 rounded-lg font-bold text-gray-600 text-xs" name="mes" id="mes">
                                <option class=" font-medium" value="ano">Mês</option>
                                <option class=" font-medium" value="1">Janeiro</option>
                                <option class=" font-medium" value="2">Fevereiro</option>
                                <option class=" font-medium" value="3">Março</option>
                                <option class=" font-medium" value="4">Abril</option>
                                <option class=" font-medium" value="5">Maio</option>
                                <option class=" font-medium" value="6">Junho</option>
                                <option class=" font-medium" value="7">Julho</option>
                                <option class=" font-medium" value="8">Agosto</option>
                                <option class=" font-medium" value="9">Setembro</option>
                                <option class=" font-medium" value="10">Outubro</option>
                                <option class=" font-medium" value="11">Novembro</option>
                                <option class=" font-medium" value="12">Dezembro</option>
                            </select>
                             <button class="mt-2 bg-blue-400 w-24 h-8 rounded shadow shadow-white hover:shadow-black" type="submit">Filtrar</button>
                    </form>
                </div>

                <form action="/funcionarios_index" method="get">
                    <div class="flex row">
                        <input class="w-72 rounded-l-lg shadow-lg text-black font-semibold border-gray-100 focus:outline-none focus:ring focus:ring-violet-300" type="text" name="search" id="search" placeholder="Pesquisa">
                        <button class="bg-gray-400 rounded-r-lg p-3 shadow-xl hover:shadow-slate-200 focus:shadow-none" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>

            <div class="flex justify-center mt-8">
                <table class="table-auto bg-white text-black shadow-lg rounded">
                    <thead class="text-xs">
                        <tr class="text-left">
                        <th class="px-5 py-2">Setor</th>
                        <th class="px-5 py-2">Funcionario</th>
                        {{-- <th class="px-5 py-2">Item</th> --}}
                        <th class="px-5 py-2">Quantidade</th>
                        <th class="px-5 py-2">Data</th>
                        {{-- <th class="px-5 py-2">Ações</th> --}}
                        </tr>
                    </thead>
                    <tbody class="align-top text-xs">
                        @foreach ($saida as $item )
                            <tr>
                                <td class="px-5 py-2 border-t">{{$item->setor}}</td>
                                <td class="px-5 py-2 border-t">{{$item->funcionario}}</td>
                                {{-- <td class="px-5 py-2 border-t">{{$item->material}}</td> --}}
                                <td class="px-5 py-2 border-t">{{$item->quantidade}}</td>
                                <td class="px-5 py-2 border-t">{{date('d/m/Y', strtotime($item->created_at))}}</td>
                                {{-- <td class="px-5 py-2 border-t"><a href="/funcionarios_editar/{{$dado->id}}">Alterar</a> - <a href="/funcionarios_del/{{$dado->id}}">Excluir</a></td> --}}
                            </tr>
                        @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="px-5 py-2 border-t font-bold">{{$total}}</td>
                                <td class="px-5 py-2 border-t"></td>
                            </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- Conteúdo Página-->
</div>


@endsection