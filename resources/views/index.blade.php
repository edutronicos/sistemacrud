@extends('layouts.layout')

@section('title', 'Inicio')

@section('content')
<div class="flex space-x-8 items-center justify-center mt-10">
    <a href="/funcionarios_index">
        <div class="max-w-sm rounded overflow-hidden shadow-2xl border-2 border-gray-100 hover:bg-gray-200 active:shadow-xl">
        <img class="w-72 px-6 pt-6" src="{{URL::asset('/img/index/equipe.png')}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Funcionários</div>
                <p class="text-gray-700 text-base">E-mails</p>
                <p class="text-gray-700 text-base">Ramais</p>
                <p class="text-gray-700 text-base">Celulares</p>
            </div>
                
        </div>
    </a>
    <a href="/documentos">
        <div class="max-w-sm rounded overflow-hidden shadow-2xl border-2 border-gray-100 hover:bg-gray-200 active:shadow-xl">
        <img class="w-72 px-6 pt-6" src="{{URL::asset('/img/index/documentos.png')}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Documentos</div>
                <p class="text-gray-700 text-base">CNPJ's</p>
                <p class="text-gray-700 text-base">Certificados</p>
                <p class="text-gray-700 text-base">Papel Timbrado</p>
            </div>
                
        </div>
    </a>

    <a href="/controle">
        <div class="max-w-sm rounded overflow-hidden shadow-2xl border-2 border-gray-100 hover:bg-gray-200 active:shadow-xl">
        <img class="w-72 px-6 pt-6" src="{{URL::asset('/img/index/sistema.png')}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Controle</div>
                    <p class="text-gray-700 text-base">Almoxarifado</p>
                    <p class="text-gray-700 text-base">Patrimonial</p>
                    <p class="text-gray-700 text-base">...</p>
            </div>
                
        </div>
    </a>

</div>
@endsection