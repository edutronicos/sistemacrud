@extends('layouts.layout')

@section('title', 'Funcionários')

@section('content')
<div class="flex h-full">
    
    <!-- Menu Lateral -->
    @include('documentos.menu-lat')
    <!-- Menu Lateral -->

    <!-- Conteúdo Página-->
    <div class=" w-full bg-gray-300 text-white">
        <div class="m-12 grid grid-cols-2 gap-4 justify-items-center">
            <a href="/documentos_novo"><button class="bg-blue-400 w-48 h-48 rounded shadow shadow-white hover:shadow-black">Novo CNPJ</button></a>
            <a href="/timbrado_novo"><button class="bg-blue-400 w-48 h-48 rounded shadow shadow-white hover:shadow-black">Novo Papel Timbrado</button></a>
            <a href="/certificado_novo"><button class="bg-blue-400 w-48 h-48 rounded shadow shadow-white hover:shadow-black">Novo Certificado</button></a>
            <a href="/logos_novo"><button class="bg-blue-400 w-48 h-48 rounded shadow shadow-white hover:shadow-black">Nova Logo</button></a>
        </div>
    </div>
    <!-- Conteúdo Página-->
</div>


@endsection
