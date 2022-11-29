@extends('layouts.layout')

@section('title', 'Funcionários')

@section('content')
<div class="flex h-full">
    
    <!-- Menu Lateral -->
    @include('funcionarios.menu-lat')
    <!-- Menu Lateral -->

    <!-- Conteúdo Página-->
    <div class="flex flex-col items-center w-full bg-gray-300">
    
        <div class="m-12 p-6 rounded-lg bg-slate-700 w-full max-w-2xl shadow-lg">
            <form action="/funcionarios_gravar" method="post">
                @csrf
                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">Nome do funcionário</label>
                    </div>
                    <div class="w-2/3">
                        <input class="w-full rounded-lg font-bold text-gray-600" type="text" name="nome" id="nome">
                    </div>
                </div>

                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">Celular Empresa</label>
                    </div>
                    <div class="w-2/3">
                        <input class="w-full rounded-lg font-bold text-gray-600" type="tel" name="celular" id="celular">
                    </div>
                </div>
                
                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">Setor</label>
                    </div>
                    <div class="w-2/3">
                        <select class="w-full p-2 rounded-lg font-bold text-gray-600" name="setor" id="setor">
                            <option value="Financeiro">Financeiro</option>
                            <option value="Informática">Informática</option>
                            <option value="Jurídico">Jurídico</option>
                            <option value="Licitação">Licitação</option>
                            <option value="Recrutamento">Recrutamento</option>
                            <option value="Recepção">Recepção</option>
                            <option value="RH">RH</option>
                            <option value="Supervisão">Supervisão</option>
                        </select>
                    </div>
                </div>

                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">Ramal</label>
                    </div>
                    <div class="2/3">
                        <input class="w-full rounded-lg font-bold text-gray-600" type="number" name="ramal" id="ramal">
                    </div>
                </div>

                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">E-mail</label>
                    </div>
                    <div class="w-2/3">
                        <input class="w-full rounded-lg font-bold text-gray-600" type="email" name="email1" id="email1">
                    </div>
                </div>

                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">E-mail 2</label>
                    </div>
                    <div class="w-2/3">
                        <input class="w-full rounded-lg font-bold text-gray-600" type="email" name="email2" id="email2">
                    </div>
                </div>

                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">E-mail 3</label>
                    </div>
                    <div class="w-2/3">
                        <input class="w-full rounded-lg font-bold text-gray-600" type="email" name="email3" id="email3">
                    </div>
                </div>

                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">E-mail 4</label>
                    </div>
                    <div class="w-2/3">
                        <input class="w-full rounded-lg font-bold text-gray-600" type="email" name="email4" id="email4">
                    </div>
                </div>

                <div class="flex justify-center">
                    <button class="bg-blue-400 w-24 h-8 rounded shadow shadow-white hover:shadow-black" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Conteúdo Página-->
</div>


@endsection