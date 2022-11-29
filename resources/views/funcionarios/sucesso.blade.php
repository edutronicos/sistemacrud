@extends('layouts.layout')

@section('refresh')
<meta http-equiv="refresh" content="2; URL='/funcionarios_index'"/>
@endsection

@section('title', 'Funcionários')

@section('content')
<div class="flex h-full">
    
    <!-- Menu Lateral -->
    @include('layouts.menu-lat')
    <!-- Menu Lateral -->

    <!-- Conteúdo Página-->
    <div class="flex flex-col items-center w-full bg-gray-300">
    
        <div class="m-12 p-6 rounded-lg bg-slate-700 w-full max-w-2xl shadow-lg text-center">
            <h1 class="text-lg text-white">Funcionário adicionado com sucesso !!!</h1>
        </div>
    </div>
    <!-- Conteúdo Página-->
</div>


@endsection

