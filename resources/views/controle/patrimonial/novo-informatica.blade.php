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
            <div class="text-center">
                <h1 class="text-black text-2xl font-semibold border-solid border-2 border-slate-300 shadow-lg">CADASTRO ITEMS INFORMÁTICA</h1>
            </div>

                <form class="grid grid-cols-3 gap-4 mt-5" action="/patrimonial_gravar" method="post">
                @csrf
                    <div class="flex flex-col">
                        <label class="text-black font-semibold">Setor</label>
                        <select class="text-black h-8 w-32 p-1 rounded font-medium" name="setor" id="setor">
                            <option value=""></option>
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
                    </div>
                    <div class="flex flex-col col-span-2">
                        <label class="text-black font-semibold">Código</label>
                        <input class="h-8 w-40 rounded text-black font-medium" type="number" name="codigo" id="codigo" onblur="zeroEsquerda(this,6)">
                    </div>
                    
                    <div class="flex flex-col">
                        <label class="text-black font-semibold ">Produto</label>
                        <input class="h-8 rounded text-black font-medium" type="text" name="produto" id="produto">
                    </div>
                    <div class="flex flex-col col-span-2">
                        <label class="text-black font-semibold">Marca</label>
                        <input class="h-8 w-52 rounded text-black font-medium" type="text" name="marca" id="marca">
                    </div>
                    <div class="flex flex-col">
                        <label class="text-black font-semibold">Cor</label>
                        <input class="h-8 w-32 rounded" type="color" name="cor" id="cor">
                    </div>
                    <div class="flex flex-col col-span-2">
                        <label class="text-black font-semibold">Periféricos</label>
                            <div class="flex justify-start">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" name="perifericos[]" value="Mouse">
                                    <label class="form-check-label inline-block text-gray-800 mr-2" for="inlineCheckbox1">Mouse</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" name="perifericos[]" value="Teclado">
                                    <label class="form-check-label inline-block text-gray-800 mr-2" for="inlineCheckbox2">Teclado</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2" type="checkbox" name="perifericos[]" value="Mouse-Pad">
                                    <label class="form-check-label inline-block text-gray-800 mr-2" for="inlineCheckbox3">Mouse-Pad</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2" type="checkbox" name="perifericos[]" value="Não-Possui">
                                    <label class="form-check-label inline-block text-gray-800" for="inlineCheckbox3">Não Possui</label>
                                </div>
                            </div>
                    </div>
                    <div class="flex flex-col col-span-3">
                        <label class="text-black font-semibold">Data Entrada</label>
                        <input class="h-8 w-48 rounded text-black font-medium" type="date" name="data_entrada" id="data_entrada">
                    </div>
                    <div class="flex flex-col col-span-3">
                        <label class="text-black font-semibold">Descrição</label>
                        <textarea class="w-3/4 rounded text-black font-medium" name="descricao" id="descricao" cols="15" rows="5"></textarea>
                    </div>
                    <div>
                        <input type="hidden" name="grupo" value="Informática">
                    </div>
                    <div class="flex flex-col col-span-3">
                        <button class="btn-primary text-black w-32 h-8 rounded shadow shadow-white hover:shadow-black" type="submit">GRAVAR</button>
                    </div>
                </form>
    
        </div>
    </div>
    <!-- Conteúdo Página-->
</div>

<script>
    function zeroEsquerda(objetoElemento, qtdZero){
        qtdZero = qtdZero ? qtdZero : 0; ///se não informar qtdZero então não coloca zero a esquerda
        var zero = ''
        for(var i=1; i<=qtdZero; i++){zero += '0'}
        return objetoElemento.value = (zero + objetoElemento.value).slice(-qtdZero);
    }
</script>

@endsection