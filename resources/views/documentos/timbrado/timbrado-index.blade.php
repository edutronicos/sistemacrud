@extends('layouts.layout')

@section('title', 'Controle')

@section('content')
<div class="flex h-full">
    
    <!-- Menu Lateral -->
    @include('documentos.menu-lat')
    <!-- Menu Lateral -->

    <!-- Conteúdo Página-->
    <div class=" w-full bg-gray-300 text-white">
        <div class="m-12">
            
            <div class="flex justify-center mt-24">
                <table class="table-auto bg-white text-black shadow-lg rounded">
                    <thead class="">
                        <tr class="text-left">
                        <th class="px-5 py-2">Empresa</th>
                        <th class="px-5 py-2">Tipo</th>
                        <th class="px-5 py-2">Papel Timbrado</th>
                        <th class="px-5 py-2">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="align-top text-sm">
                        @foreach ($dados as $dado )
                            <tr>
                                <td class="px-5 py-2 border-t">{{$dado->nome}}</td>
                                <td class="px-5 py-2 border-t">{{$dado->tipo}}</td>
                                <td class="px-5 py-2 border-t"><a href="/storage/{{$dado->arquivo}}" download="PapelTimbrado-{{$dado->nome}}"> <button class="bg-amber-300 w-24 h-5 rounded shadow shadow-white hover:shadow-black"><i class="bi bi-download"></i> Download</button> </a></td>
                                <td class="px-5 py-2 border-t"><a href="/documentos_del/{{$dado->id}}"><i class="bi bi-trash3 text-red-600"></i> Excluir</a></td>
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