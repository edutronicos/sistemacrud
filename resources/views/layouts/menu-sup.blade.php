<!-- Menu horizontal da página -->

<nav class="flex items-center justify-between flex-wrap bg-gray-100 p-3">

    <div class="flex items-center flex-shrink-0 text-gray-700 mr-6">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-fill m-2" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
        </svg>
        <span class="font-semibold text-xl tracking-tight"><a href="/">Sistema</a></span>
    </div>

    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>

    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="/funcionarios_index" class="block mt-4 lg:inline-block lg:mt-0 font-semibold text-gray-700 hover:text-gray-300 mr-4">FUNCIONÁRIOS</a>
            <a href="/documentos" class="block mt-4 lg:inline-block lg:mt-0 font-semibold text-gray-700 hover:text-gray-300 mr-4">DOCUMENTOS</a>
            <button class="block mt-4 lg:inline-block lg:mt-0 font-semibold text-gray-700 hover:text-gray-300" type="button" data-dropdown-toggle="dropdown">CONTROLE</button>
                <!-- Dropdown Menu -->
                <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="dropdown">
                
                    <ul class="py-1" aria-labelledby="dropdown">
                    <li>
                        <a href="/patrimonial" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Patrimonial</a>
                    </li>
                    <li>
                        <a href="/almoxarifado" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Almoxarifado</a>
                    </li>
                    </ul>
                </div>
        </div>
    </div>
        
    @if (Route::has('login'))
        <div class="hidden absolute top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Entrar</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registro</a>
                @endif
            @endauth
        </div>
    @endif
  
</nav>