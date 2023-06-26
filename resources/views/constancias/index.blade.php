<x-app-layout>
    <x-slot name="header">
        
        <a                        
                href="{{ route('constancias.create') }}"
                class="bg-green-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
            >Crear nueva Constancia de estudios
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h1 class="text-2xl font-bold text-center mb-10"> Mostrar Constancias de estudios</h1>

                @if (session()->has('mensaje'))

                    <div class="uppercase border border-green-600 bg-gree-100 text-green-600 font-bold p-2 my-3 text-sm">

                        {{ session('mensaje') }}

                    </div>

                @endif

                     
                    
        </div>
    </div>
</x-app-layout>