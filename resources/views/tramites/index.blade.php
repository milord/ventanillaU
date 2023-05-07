<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            
            <x-nav-link :href="route('justificantes.index')" :active="request()->routeIs('justificantes.index')">
                {{ __('Justificantes') }}
            </x-nav-link> |
            <x-nav-link :href="route('certificados.index')" :active="request()->routeIs('certificados.index')">
                {{ __('Certificados') }}
            </x-nav-link>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{ __("Todos los trámites") }}

        </div>
    </div>
</x-app-layout>
