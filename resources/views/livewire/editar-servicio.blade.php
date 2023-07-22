<form class="md:w-1/2 space-y-5" wire:submit.prevent='editarServicio' novalidate>
    <div> {{-- Apellido paterno del alumno --}}
        <x-input-label for="apaterno" :value="__('Apellido Paterno:')" />
        <x-text-input 
            id="apaterno"
            class="block mt-1 w-full"
            type="text"
            wire:model="apaterno"
            :value="old('apaterno')"
            placeholder="Apellido Paterno"
        />

        @error('apaterno')
            {{$message}}
        @enderror
    </div>

    <div> {{-- Apellido materno del alumno --}}
        <x-input-label for="amaterno" :value="__('Apellido Materno:')" />
        <x-text-input 
            id="amaterno"
            class="block mt-1 w-full"
            type="text"
            wire:model="amaterno"
            :value="old('amaterno')"
            placeholder="Apellido materno"
        />

        @error('amaterno')
            {{$message}}
        @enderror
    </div>

    <div>{{-- Nombres del alumno --}}
        <x-input-label for="nombres_alumno" :value="__('Nombres del alumno(a):')" />
        <x-text-input 
            id="nombres_alumno"
            class="block mt-1 w-full"
            type="text"
            wire:model="nombres_alumno"
            :value="old('nombres_alumno')"
            placeholder="Nombres del alumno(a)"
        />

        @error('nombres_alumno')
            {{$message}}
        @enderror
    </div>

    <div>{{-- Domicilio del alumno --}}
        <x-input-label for="domicilio" :value="__('Domicilio:')" />
        <x-text-input 
            id="domicilio"
            class="block mt-1 w-full"
            type="text"
            wire:model="domicilio"
            :value="old('domicilio')"
            placeholder="Domicilio del alumno(a)"
        />

        @error('domicilio')
            {{$message}}
        @enderror
    </div>

    <div>{{-- Código postal --}}
        <x-input-label for="cp" :value="__('Código postal:')" />
        <x-text-input 
            id="cp"
            class="block mt-1 w-full"
            type="text"
            wire:model="cp"
            :value="old('cp')"
            placeholder="Código postal del domicilio"
        />

        @error('cp')
            {{$message}}
        @enderror
    </div>

    <div>{{-- Especialidad o Carrera que estudia el alumno --}}
        <x-input-label for="especialidade" :value="__('Especialidad:')" />
        <select 
            id="especialidade"
            wire:model="especialidade"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >
            <option>-- Seleccione --</option>
            @foreach ($especialidades as $especialidade)
                <option value="{{ $especialidade->id }}">{{$especialidade->especialidade}}</option>
            @endforeach
        </select>

        @error('especialidade')
            {{$message}}
        @enderror

    </div>

    <div>{{-- Inicia y termina servicio --}}
        <x-input-label for="inicia_servicio" :value="__('Inicia servicio:')" />
        <x-text-input 
            id="inicia_servicio"
            class="block mt-1 md:w-1/2"
            type="date"
            wire:model="inicia_servicio"
            :value="old('inicia_servicio')"
        />

        @error('inicia_servicio')
            {{$message}}
        @enderror

        <x-input-label for="termina_servicio" :value="__('Termina servicio:')" />
        <x-text-input 
            id="termina_servicio"
            class="block mt-1 md:w-1/2"
            type="date"
            wire:model="termina_servicio"
            :value="old('termina_servicio')"
        />

        @error('termina_servicio')
            {{$message}}
        @enderror

    </div>

    <x-primary-button>
        Guardar los cambios del pasante
    </x-primary-button>
</form>