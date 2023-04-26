<form class="md:w-1/2 space-y-5" wire:submit.prevent='crearJustificante' novalidate>
    <div>
        <x-input-label for="nombre_alumno" :value="__('Nombre del alumno(a):')" />
        <x-text-input 
            id="nombre_alumno"
            class="block mt-1 w-full"
            type="text"
            wire:model="nombre_alumno"
            :value="old('nombre_alumno')"
            placeholder="Nombre completo del alumno(a)"
        />

        @error('nombre_alumno')
            {{$message}}
        @enderror
    </div>

    <div>
        <x-input-label for="nombre_tutor" :value="__('Nombre del tutor:')" />
        <x-text-input 
            id="nombre_tutor"
            class="block mt-1 w-full"
            type="text"
            wire:model="nombre_tutor"
            :value="old('nombre_tutor')"
            placeholder="Nombre completo del tutor"
        />

        @error('nombre_tutor')
            {{$message}}
        @enderror
    </div>

    <div>
        <x-input-label for="telefono_tutor" :value="__('Teléfono del tutor:')" />
        <x-text-input 
            id="telefono_tutor"
            class="block mt-1 w-full"
            type="tel"
            wire:model="telefono_tutor"
            :value="old('telefono_tutor')"
            placeholder="1234567890"
            pattern="[0-9]{10}"
            maxlength="10"
        />

        @error('telefono_tutor')
            {{$message}}
        @enderror
    </div>

    <div>
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

    <div>
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

    <div>
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

    <div>
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
        <x-input-label for="dias_laborales" :value="__('Días laborales a justificar:')" />
        <select 
            id="dias_laborales"
            wire:model="dias_laborales"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >
        <option>-- Seleccione --</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        @error('dias_laborales')
            {{$message}}
        @enderror

    </div>

    <div>
        <x-input-label for="inicia_ausencia" :value="__('Inicia ausencia:')" />
        <x-text-input 
            id="inicia_ausencia"
            class="block mt-1 md:w-1/2"
            type="date"
            wire:model="inicia_ausencia"
            :value="old('inicia_ausencia')"
        />

        @error('inicia ausencia')
            {{$message}}
        @enderror

        <x-input-label for="termina_ausencia" :value="__('Termina ausencia:')" />
        <x-text-input 
            id="termina_ausencia"
            class="block mt-1 md:w-1/2"
            type="date"
            wire:model="termina_ausencia"
            :value="old('termina_ausencia')"
        />

        @error('termina ausencia')
            {{$message}}
        @enderror

    </div>

    <div>
        <x-input-label for="motivo_inasistencia" :value="__('Motivo de la inasistencia:')" />
        <textarea 
            wire:model="motivo_inasistencia"    
            placeholder="Escriba cual fue el motivo de la inasistencia del alumno"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full h-72"
            :value="old('motivo_inasistencia')"
            
        ></textarea>

        @error('motivo_inasistencia')
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
        Crear Justificante
    </x-primary-button>
</form>