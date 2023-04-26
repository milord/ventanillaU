<x-app-layout>
    <x-slot name="header">
        <x-link 
            :href="route('justificantes.create')"
        >
            Crear justificante
        </x-link>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h1 class="text-2xl font-bold text-center mb-10"> Mostrar Justificantes</h1>

                @if (session()->has('mensaje'))

                    <div class="uppercase border border-green-600 bg-gree-100 text-green-600 font-bold p-2 my-3 text-sm">

                        {{ session('mensaje') }}

                    </div>

                @endif

                        <livewire:mostrar-justificantes />
                    
        </div>
    </div>
</x-app-layout>