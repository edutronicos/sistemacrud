@extends('layouts.layout')

@section('title', 'Patrimonial')

@section('content')
<div class="flex h-full">
    
    <!-- Menu Lateral -->
    @include('controle.patrimonial.menu-lat')
    <!-- Menu Lateral -->

    <!-- Conteúdo Página-->
    <div class=" w-full bg-gray-300 text-white">
        <div class="m-12">
            <div class="flex flex-row justify-center">
                <form action="/patrimonial" method="get">
                    <label>Pesquisar</label>
                    <div class="flex row">
                        <input class="rounded-l-lg h-8 text-black font-semibold" type="text" name="search" id="search">
                        <button class="btn-primary px-4 py-1 rounded-r-lg" type="submit"><i class="bi bi-binoculars"></i></button>
                    </div>
                </form>
            </div>


                <div class="flex justify-center mt-24">
                <table class="table-auto bg-white text-black shadow-lg rounded">
                    <thead class="text-xs">
                        <tr class="text-left">
                        <th class="px-2 py-2"><a href="/patrimonial/order/{{'grupo'}}">Grupo</a></th>
                        <th class="px-2 py-2"><a href="/patrimonial/order/{{'setor'}}">Setor</a></th>
                        <th class="px-2 py-2"><a href="/patrimonial/order/{{'codigo'}}">Código</a></th>
                        <th class="px-2 py-2">Produto</th>
                        <th class="px-2 py-2">Marca</th>
                        <th class="px-2 py-2">Cor</th>
                        <th class="px-2 py-2">Periféricos</th>
                        <th class="px-2 py-2"><a href="/patrimonial/order/{{'data_entrada'}}">Data Entrada</a></th>
                        <th class="px-2 py-2">Descrição</th>
                        <th class="px-2 py-2">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="align-top text-xs">
                        @foreach ($dados as $dado )
                            <tr>
                                <td class="px-2 py-2 border-t">{{$dado->grupo}}</td>
                                <td class="px-2 py-2 border-t">{{$dado->setor}}</td>
                                <td class="px-2 py-2 border-t">{{$dado->codigo}}</td>
                                <td class="px-2 py-2 border-t">{{$dado->produto}}</td>
                                <td class="px-2 py-2 border-t">{{$dado->marca}}</td>
                                <td class="px-2 py-2 border-t"><p class="h-4 w-8 bg-[{{$dado->cor}}]"></p></td>
                                <td class="px-2 py-2 border-t">{{$dado->perifericos}}</td>
                                <td class="px-2 py-2 border-t">{{ date('d/m/Y', strtotime($dado->data_entrada)) }}</td>
                                <td class="px-2 py-2 border-t"><button class="underline decoration-wavy" type="button" data-modal-toggle="popup-modal{{$dado->id}}">Decrição</button></td>
                                <td class="px-2 py-2 border-t"><a href="/patrimonial_editar/{{$dado->id}}"><i class="bi bi-trash3 text-red-600"></i>Alterar</a></td>
                                <td class="px-2 py-2 border-t"><a href="/patrimonial_del/{{$dado->id}}"><i class="bi bi-trash3 text-red-600"></i>Excluir</a></td>
                                
                            </tr>
                                {{-- Modal para descrição do produto --}}
                                <div id="popup-modal{{$dado->id}}" tabindex="-1" class="fixed hidden overflow-y-auto overflow-x-hidden top-0 right-0 left-50 z-50 p-4 md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full max-w-md h-full md:h-auto">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal{{$dado->id}}">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-6 text-center">
                                                <h3 class="mb-5 text-lg text-start font-normal text-gray-500 dark:text-gray-400">{{$dado->descricao}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Fim Modal Descrição --}}
                        @endforeach
                       
                    </tbody>
                </table>
                </div>



                


        </div>
    </div>
    <!-- Conteúdo Página-->
</div>


@endsection