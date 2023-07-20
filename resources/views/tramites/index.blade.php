<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xs text-gray-800 dark:text-gray-200 leading-tight">
            
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ __('Control Escolar') }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('constancias.index')">
                            {{ __('Constancias de estudios') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('justificantes.index')">
                            {{ __('Justificantes') }}
                        </x-dropdown-link>

                        
                    </x-slot>
                </x-dropdown>
            </div>
        
            <x-nav-link :href="route('justificantes.index')" :active="request()->routeIs('justificantes.index')">
                {{ __('Aspirantes') }}
            </x-nav-link> 
            <x-nav-link :href="route('justificantes.index')" :active="request()->routeIs('justificantes.index')">
                {{ __('Baja') }}
            </x-nav-link> 
            <x-nav-link :href="route('justificantes.index')" :active="request()->routeIs('justificantes.index')">
                {{ __('Becas') }}
            </x-nav-link> 
            <x-nav-link :href="route('certificados.index')" :active="request()->routeIs('certificados.index')">
                {{ __('Certificados') }}
            </x-nav-link> 
             
            <x-nav-link :href="route('certificados.index')" :active="request()->routeIs('certificados.index')">
                {{ __('Constancia validación') }}
            </x-nav-link> 
            <x-nav-link :href="route('justificantes.index')" :active="request()->routeIs('justificantes.index')">
                {{ __('Extraordinarios') }}
            </x-nav-link> 
            <x-nav-link :href="route('justificantes.index')" :active="request()->routeIs('justificantes.index')">
                {{ __('Historiales') }}
            </x-nav-link> 
            <x-nav-link :href="route('justificantes.index')" :active="request()->routeIs('justificantes.index')">
                {{ __('Intersemestrales') }}
            </x-nav-link> 
            
            <x-nav-link :href="route('justificantes.index')" :active="request()->routeIs('justificantes.index')">
                {{ __('Reingreso') }}
            </x-nav-link> 
            <x-nav-link :href="route('justificantes.index')" :active="request()->routeIs('justificantes.index')">
                {{ __('Semestral') }}
            </x-nav-link> 
            <x-nav-link :href="route('justificantes.index')" :active="request()->routeIs('justificantes.index')">
                {{ __('Titulación') }}
            </x-nav-link>
            <x-nav-link :href="route('servicios.index')" :active="request()->routeIs('servicios.index')">
                {{ __('Servicio Social') }}
            </x-nav-link> 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{ __("Todos los trámites") }}

        </div>
    </div>
</x-app-layout>
