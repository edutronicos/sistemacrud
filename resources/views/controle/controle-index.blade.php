@extends('layouts.layout')

@section('title', 'Controle')

@section('content')
<div class="flex h-full">
    
    <!-- Menu Lateral -->
    @include('controle.menu-lat')
    <!-- Menu Lateral -->

    <!-- Conteúdo Página-->
    <div class=" w-full bg-gray-300 text-white">
        <div class="m-12">


                <h1>EXCLUIR</h1>

        </div>
    </div>
    <!-- Conteúdo Página-->
</div>


@endsection
