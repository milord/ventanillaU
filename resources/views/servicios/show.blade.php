<x-app-layout>

    <x-slot name="header">

        <div class="md:flex md:justify-between md:items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Solicitud de: {{ $servicio->apaterno . " " . $servicio->amaterno . " " . $servicio->nombres_alumno }}
            </h2>
            <a                        
                href="#"
                class="bg-green-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
            >FSS1</a>
            <a                        
                href="{{ route('servicio.report', $servicio->id) }}"
                class="bg-green-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
            >FSS2</a>
            <a                        
                href="#"
                class="bg-green-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
            >FSS3</a>
            <a                        
                href="#"
                class="bg-green-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
            >FSS4</a>
            <a                        
                href="#"
                class="bg-green-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
            >FSS5</a>
            <a                        
                href="#"
                class="bg-green-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
            >FSS6</a>
            <a                        
                href="#"
                class="bg-green-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
            >FSS7</a>
            <a                        
                href="#"
                class="bg-green-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
            >FSS8</a>
            <a                        
                href="#"
                class="bg-green-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
            >FSS9</a>
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