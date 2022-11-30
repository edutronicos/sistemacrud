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

            <div class="flex justify-center mt-24">
                <table class="table-auto bg-white text-black shadow-lg rounded">
                    <thead class="">
                        <tr class="text-left">
                        <th class="px-5 py-2">Setor</th>
                        <th class="px-5 py-2">Funcionario</th>
                        <th class="px-5 py-2">Item</th>
                        <th class="px-5 py-2">Quantidade</th>
                        <th class="px-5 py-2">Data</th>
                        {{-- <th class="px-5 py-2">Ações</th> --}}
                        </tr>
                    </thead>
                    <tbody class="align-top text-sm">
                        @foreach ($itens as $item )
                            <tr>
                                <td class="px-5 py-2 border-t">{{$item->setor}}</td>
                                <td class="px-5 py-2 border-t">{{$item->funcionario}}</td>
                                <td class="px-5 py-2 border-t">{{$item->material}}</td>
                                <td class="px-5 py-2 border-t">{{$item->quantidade}}</td>
                                <td class="px-5 py-2 border-t">{{date('d/m/Y', strtotime($item->created_at))}}</td>
                                {{-- <td class="px-5 py-2 border-t"><a href="/funcionarios_editar/{{$dado->id}}">Alterar</a> - <a href="/funcionarios_del/{{$dado->id}}">Excluir</a></td> --}}
                            </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- Conteúdo Página-->
</div>


@endsection