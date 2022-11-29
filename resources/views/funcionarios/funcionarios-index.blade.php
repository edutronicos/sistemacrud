@extends('layouts.layout')

@section('title', 'Funcionários')

@section('content')
<div class="flex h-full">
    
    <!-- Menu Lateral -->
    @include('funcionarios.menu-lat')
    <!-- Menu Lateral -->

    <!-- Conteúdo Página-->
    <div class=" w-full bg-gray-300 text-white">
        <div class="m-12">
            <div class="flex flex-row justify-end">
                <form action="/funcionarios_index" method="get">
                    <label>Pesquisar</label>
                    <div class="flex row">
                        <input class="w-72 rounded-l-lg shadow-lg text-black font-semibold border-gray-100 focus:outline-none focus:ring focus:ring-violet-300" type="text" name="search" id="search" placeholder="Pesquisa">
                        <button class="bg-gray-400 rounded-r-lg p-3 shadow-xl hover:shadow-slate-200 focus:shadow-none" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>

            <div class="flex justify-center mt-24">
                <table class="table-auto bg-white text-black shadow-lg rounded">
                    <thead class="">
                        <tr class="text-left">
                        <th class="px-5 py-2">Nome</th>
                        <th class="px-5 py-2">Ramal</th>
                        <th class="px-5 py-2">Celular</th>
                        <th class="px-5 py-2">Email</th>
                        <th class="px-5 py-2">Setor</th>
                        <th class="px-5 py-2">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="align-top text-sm">
                        @foreach ($dados as $dado )
                            <tr>
                                <td class="px-5 py-2 border-t">{{$dado->nome}}</td>
                                <td class="px-5 py-2 border-t">{{$dado->ramal}}</td>
                                <td class="px-5 py-2 border-t">{{$dado->celular}}</td>
                                <td class="px-5 py-2 border-t"><a href="mailto:{{$dado->email1}}">{{$dado->email1}}</a>
                                    @if($dado->email2)
                                        <br><a href="mailto:{{$dado->email2}}">{{$dado->email2}}</a>
                                    @endif
                                    @if ($dado->email3)
                                        <br><a href="mailto:{{$dado->email3}}">{{$dado->email3}}</a>
                                    @endif
                                    @if ($dado->email4)
                                        <br><a href="mailto:{{$dado->email4}}">{{$dado->email4}}</a>
                                    @endif
                                <td class="px-5 py-2 border-t">{{$dado->setor}}</td>
                                <td class="px-5 py-2 border-t"><a href="/funcionarios_editar/{{$dado->id}}">Alterar</a> - <a href="/funcionarios_del/{{$dado->id}}">Excluir</a></td>
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

