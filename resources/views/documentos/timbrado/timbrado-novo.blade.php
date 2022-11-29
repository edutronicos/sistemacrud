@extends('layouts.layout')

@section('title', 'Documentos')

@section('content')
<div class="flex h-full">
    
    <!-- Menu Lateral -->
    @include('documentos.menu-lat')
    <!-- Menu Lateral -->

    <!-- Conteúdo Página-->
    <div class="flex flex-col items-center w-full bg-gray-300">
    
        <div class="m-12 p-6 rounded-lg bg-slate-700 w-full max-w-2xl shadow-lg">
            <form action="/timbrado_gravar" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">Nome da empresa</label>
                    </div>
                    <div class="w-2/3">
                        <input class="w-full rounded-lg font-bold text-gray-600" type="text" name="nome_empresa" id="nome_empresa">
                    </div>
                </div>

                <div class="flex mb-6 items-center">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">Tipo de Arquivo</label>
                    </div>
                    <div class="w-2/3">
                        <select class="w-32 h-8 rounded pl-2" name="tipo" id="tipo">
                            <option value=""></option>
                            <option value="pdf">PDF</option>
                            <option value="word">WORD</option>
                        </select>
                    </div>
                </div>
                
                <div class="flex justify-center items-center w-full">
                    <div class="w-1/3">
                        <label class="font-semibold text-zinc-100" for="">Papel Timbrado</label>
                    </div>
                    <div class="w-2/3">
                        <input class="text-white" type="file" name="arquivo" id="">
                    </div>
                </div> 

                
                <div class="flex justify-center mt-4">
                    <button class="bg-blue-400 w-24 h-8 rounded shadow shadow-white hover:shadow-black" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Conteúdo Página-->
</div>


@endsection