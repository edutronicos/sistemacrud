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
                <h1 class="text-black text-2xl font-semibold border-solid border-2 border-slate-300 shadow-lg">CADASTRO MÓVEIS</h1>
            </div>

                <form class="grid grid-cols-3 gap-4 mt-5" action="/patrimonial_atualizar/{{$dados->id}}" method="post">
                @csrf
                    <div class="flex flex-col">
                        <label class="text-black font-semibold">Setor</label>
                        <select class="text-black h-8 w-32 p-1 rounded font-medium" name="setor" id="setor">
                            <option value=""></option>
                            <option class=" font-medium" value="Arquivo" @if (stristr($dados->setor, "Arquivo")) selected @endif>Arquivo</option>
                            <option class=" font-medium" value="Financeiro" @if (stristr($dados->setor, "Financeiro")) selected @endif>Financeiro</option>
                            <option class=" font-medium" value="Informática" @if (stristr($dados->setor, "Informática")) selected @endif>Informática</option>
                            <option class=" font-medium" value="Jurídico" @if (stristr($dados->setor, "Jurídico")) selected @endif>Jurídico</option>
                            <option class=" font-medium" value="Licitação" @if (stristr($dados->setor, "Licitação")) selected @endif>Licitação</option>
                            <option class=" font-medium" value="Recepção" @if (stristr($dados->setor, "Recepção")) selected @endif>Recepção</option>
                            <option class=" font-medium" value="Recrutamento" @if (stristr($dados->setor, "Recrutamento")) selected @endif>Recrutamento</option>
                            <option class=" font-medium" value="RH" @if (stristr($dados->setor, "RH")) selected @endif>RH</option>
                            <option class=" font-medium" value="Supervisão" @if (stristr($dados->setor, "Supervisão")) selected @endif>Supervisão</option>
                            <option class=" font-medium" value="Telefonista" @if (stristr($dados->setor, "Telefonista")) selected @endif>Telefonista</option>
                        </select>
                    </div>
                    <div class="flex flex-col col-span-2">
                        <label class="text-black font-semibold">Código</label>
                        <input class="h-8 w-40 rounded text-black font-medium" type="number" name="codigo" id="codigo" onblur="zeroEsquerda(this,6)" value="{{$dados->codigo}}">
                    </div>
                    
                    <div class="flex flex-col">
                        <label class="text-black font-semibold ">Produto</label>
                        <input class="h-8 rounded text-black font-medium" type="text" name="produto" id="produto" value="{{$dados->produto}}">
                    </div>
                    <div class="flex flex-col col-span-2">
                        <label class="text-black font-semibold">Marca</label>
                        <input class="h-8 w-52 rounded text-black font-medium" type="text" name="marca" id="marca" value="{{$dados->marca}}">
                    </div>
                    <div class="flex flex-col">
                        <label class="text-black font-semibold">Cor</label>
                        <input class="h-8 w-32 rounded" type="color" name="cor" id="cor" value="{{$dados->cor}}">
                    </div>
                    <div class="flex flex-col col-span-2">
                        <label class="text-black font-semibold">Data Entrada</label>
                        <input class="h-8 w-48 rounded text-black font-medium" type="date" name="data_entrada" id="data_entrada" value="{{$dados->data_entrada}}">
                    </div>
                    <div class="flex flex-col col-span-3">
                        <label class="text-black font-semibold">Descrição</label>
                        <textarea class="w-3/4 rounded text-black font-medium" name="descricao" id="descricao" cols="15" rows="5">{{$dados->descricao}}</textarea>
                    </div>
                    <div>
                        <input type="hidden" name="grupo" value="Móveis">
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