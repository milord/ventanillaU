<x-app-layout>

    <x-slot name="header">

        <div class="md:flex md:justify-between md:items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Solicitud de: {{ $servicio->nombres_alumno }}
            </h2>
            <a                        
                href="{{ route('servicio.report', $servicio->id) }}"
                class="bg-green-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
            >Imprimir</a>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <livewire:mostrar-servicio 
                    :servicio="$servicio"
                />
            </div>
        </div>
    </div>
</x-app-layout>