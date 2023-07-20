<form class="md:w-1/2 space-y-5" wire:submit.prevent='crearConstancia' novalidate>

    <div class="md:grid md:grid-cols-2 p-4 my-5">
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

        <x-input-label for="amaterno" :value="__('Apellido Materno:')" />
        <x-text-input 
            id="amaterno"
            class="block mt-1 w-full"
            type="text"
            wire:model="amaterno"
            :value="old('amaterno')"
            placeholder="Apellido Materno"
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

    <div>{{-- Número de control --}}
        <x-input-label for="no_control" :value="__('Número de control:')" />
        <x-text-input 
            id="no_control"
            class="block mt-1 w-full"
            type="text"
            wire:model="no_control"
            :value="old('no_control')"
            placeholder="Número de control"
        />

        @error('no_control')
            {{$message}}
        @enderror
    </div>

    <div>{{-- Número de Seguro Social Facultativo --}}
        <x-input-label for="nss" :value="__('NSS:')" />
        <x-text-input 
            id="nss"
            class="block mt-1 w-full"
            type="text"
            wire:model="nss"
            :value="old('nss')"
            placeholder="Número de Seguro Social Facultativo"
        />

        @error('curp')
            {{$message}}
        @enderror
    </div>

    <div>{{-- Semestre que cursa el alumno --}}
        <x-input-label for="semestre" :value="__('Semestre:')" />
        <select 
            id="semestre"
            wire:model="semestre"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >
            <option>-- Seleccione --</option>
            @foreach ($semestres as $semestre)
                <option value="{{ $semestre->id }}">{{$semestre->semestre}}</option>
            @endforeach
        </select>

        @error('semestre')
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

    <div> {{-- Grupo del alumno --}}
        <x-input-label for="grupo" :value="__('Grupo:')" />
        <select 
            id="grupo"
            wire:model="grupo"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >
            <option>-- Seleccione --</option>
            @foreach ($grupos as $grupo)
                <option value="{{ $grupo->id }}">{{$grupo->grupo}}</option>
            @endforeach
        </select>

        @error('grupo')
            {{$message}}
        @enderror

    </div>

    <div> {{-- Ciclo escolar al que pertenece el semestre --}}
        <x-input-label for="ciclo_escolar" :value="__('Ciclo Escolar:')" />
        <select 
            id="ciclo_escolar"
            wire:model="ciclo_escolar"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >  
            <option>-- Seleccione --</option>
           
                <option value="1">2023-2024</option>
            
        </select> 

        @error('ciclo_escolar')
            {{$message}}
        @enderror
            
    </div>

    <div> {{-- Período escolar del semestre --}}
        <x-input-label for="periodo_escolar" :value="__('Período Escolar:')" />
        <select 
            id="periodo_escolar"
            wire:model="periodo_escolar"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        > 
            <option>-- Seleccione --</option>
            <option value="1">Agosto 2023 - Enero 2024</option>
        </select>

        @error('periodo_escolar')
            {{$message}}
        @enderror

    </div>

    <div> {{-- Turno --}}
        <x-input-label for="turno" :value="__('Turno:')" />
        <select 
            id="turno"
            wire:model="turno"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >
        <option>-- Seleccione --</option>
            @foreach ($turnos as $turno)
                <option value="{{ $turno->id }}">{{$turno->turno}}</option>
            @endforeach
        </select>

        @error('turno')
            {{$message}}
        @enderror

    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen  :')" />
        <input type="file"
            wire:model="imagen"
            id="imagen"
            class="block mt-1 w-full"
            accept="image/*"
        />

        <div class="my-5">
            @if ($imagen)
                Receta médica:
                <img src="{{ $imagen->temporaryURL() }}">
            @endif

        @error('imagen')
            {{$message}}
        @enderror

    </div>

    <x-primary-button>
        Crear Constancia de estudios
    </x-primary-button>

</form>
