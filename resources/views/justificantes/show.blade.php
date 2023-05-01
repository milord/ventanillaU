<x-app-layout>
    <x-slot name="header">
        <div class="md:flex md:justify-between md:items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Justificante de: {{ $justificante->nombre_alumno }}
            </h2>
            <a                        
                href="{{ route('justificante.report', $justificante->id) }}"
                class="bg-green-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
            >Imprimir</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                <livewire:mostrar-justificante 
                    :justificante="$justificante"
                />
            </div>
        </div>
    </div>
</x-app-layout>