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

        <h1 class="font-semibold text-2xl text-slate-700">Selecione o item e insira o valor de entrada.</h1>

            <div class="mt-12 p-6 rounded-lg bg-slate-700 w-full max-w-2xl shadow-lg">
                <form action="/almoxarifado_store_entrada_item" method="post">
                    @csrf
                    <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">Selecione o Item :</label>
                    </div>
                    <div class="w-2/3">
                        <select class="w-full p-2 rounded-lg font-bold text-gray-600" name="item" id="item">
                            <option value=""></option>
                        @foreach ( $itens as $item )
                            <option value="{{$item->id}}">{{$item->material}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                    <div class="flex mb-6 items-center">
                        <div class="w-1/3">
                            <label class="font-semibold text-zinc-100" for="">Quantidade :</label>
                        </div>
                        <div class="w-2/3">
                            <input class="rounded-lg font-bold text-gray-600" type="number" name="quantidade" id="quantidade">
                        </div>
                    </div>
                    
                    <div class="flex justify-center mt-4">
                        <button class="bg-blue-400 w-24 h-8 rounded shadow shadow-white hover:shadow-black" type="submit">Salvar</button>
                    </div>
                </form>
            </div>

            @if (session('msg'))
                <div class="m-12 p-6 rounded-lg bg-green-200 w-full max-w-2xl shadow-lg">
            <h1 class="text-black text-center">Item atualizado com sucesso !!!</h1>
            </div>
            @endif
            

        </div>

    </div>
    <!-- Conteúdo Página-->
</div>


@endsection