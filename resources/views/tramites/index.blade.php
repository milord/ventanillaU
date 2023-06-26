<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xs text-gray-800 dark:text-gray-200 leading-tight">
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
            <x-nav-link :href="route('constancias.index')" :active="request()->routeIs('constancias.index')">
                {{ __('Constancia estudios') }}
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
                {{ __('Justificantes') }}
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
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{ __("Todos los trámites") }}

        </div>
    </div>
</x-app-layout>
