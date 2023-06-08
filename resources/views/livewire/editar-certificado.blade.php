<form class="md:w-1/2 space-y-5" wire:submit.prevent='editarCertificado' novalidate>
    
    <div>{{-- Tipo de solicitud --}}
        
        <label for="duplicado">
            <input type="radio" wire:model=tipo_solicitud value="duplicado">
            Duplicado
        </label>
        <label for="parcial">
            <input type="radio" wire:model=tipo_solicitud value="parcial">
            Parcial
        </label>
    </div>
    
    <div>{{-- Modalidad de estudio --}}
        <x-input-label for="modalidade" :value="__('Modalidad:')" />
        <select
            id="modalidade"
            wire:model='modalidade'
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >
            <option>-- Seleccione Modalidad --</option>
            @foreach ($modalidades as $modalidade)
                <option value="{{ $modalidade->id }}">{{$modalidade->modalidade}}</option>
            @endforeach
        </select>
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

    <div>{{-- Especialidad o carrera --}}
        <x-input-label for="especialidad" :value="__('Especialidad:')" />
        <x-text-input 
            id="especialidad"
            class="block mt-1 w-full"
            type="text"
            wire:model="especialidad"
            :value="old('especialidad')"
            placeholder="Nombre de la especialidad"
        />

        @error('especialidad')
            {{$message}}
        @enderror
    </div>

    <div>{{-- Turno en el que terminó sus estudios --}}
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
    
    <div>{{-- Nombre completo del alumno --}}
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

    <div>{{-- Clave Única de Registro de Población --}}
        <x-input-label for="curp" :value="__('CURP:')" />
        <x-text-input 
            id="curp"
            class="block mt-1 w-full"
            type="text"
            wire:model="curp"
            :value="old('curp')"
            placeholder="Clave Única de Registro de Población"
        />

        @error('curp')
            {{$message}}
        @enderror
    </div>

    <div>{{-- Teléfono --}}
        <x-input-label for="telefono" :value="__('Teléfono del alumno:')" />
        <x-text-input 
            id="telefono"
            class="block mt-1 w-full"
            type="tel"
            wire:model="telefono"
            :value="old('telefono')"
            placeholder="1234567890"
            pattern="[0-9]{10}"
            maxlength="10"
        />

        @error('telefono')
            {{$message}}
        @enderror
    </div>

    <div>{{-- Correo electrónico--}}
        <x-input-label for="correo" :value="__('Correo del alumno(a):')" />
        <x-text-input 
            id="correo"
            class="block mt-1 w-full"
            type="text"
            wire:model="correo"
            :value="old('correo')"
            placeholder="Correo del alumno(a)"
        />

        @error('correo')
            {{$message}}
        @enderror
    </div>

    <div>{{-- Folio pago CEAP --}}
        <x-input-label for="folio_pago" :value="__('Folio pago:')" />
        <x-text-input 
            id="folio_pago"
            class="block mt-1 w-full"
            type="text"
            wire:model="folio_pago"
            :value="old('folio_pago')"
            placeholder="Folio pago"
        />

        @error('folio_pago')
            {{$message}}
        @enderror
    </div>

    <div>{{-- Documentación impresa entregada --}}
        <strong>Documentación entregada</strong>
        <x-input-label for="bachillerato_doc" />
            <x-text-input
            id="bachillerato_doc" 
            wire:model="bachillerato_doc" 
            type="checkbox" 
            />
            Copia del certificado de bachillerato
        <x-input-label for="secundaria_doc" />
            <x-text-input
            id="secundaria_doc" 
            wire:model="secundaria_doc" 
            type="checkbox" 
            />
            Copia del certificado de secundaria
        
        <x-input-label for="nacimiento_doc" />
            <x-text-input
            id="nacimiento_doc" 
            wire:model="nacimiento_doc" 
            type="checkbox" 
            />
            Copia del certificado de nacimiento
        
        <x-input-label for="curp_doc" />
            <x-text-input 
            id="curp_doc"
            wire:model="curp_doc" 
            type="checkbox" 
            />
            CURP impresa
       
        <x-input-label for="pago_doc" />
            <x-text-input
            id="pago_doc"
            wire:model="pago_doc" 
            type="checkbox" 
            />
            Pago CEAP
        
    </div>

    {{-- Imagen del pago CEAP 
    <div>
        <x-input-label for="imagen" :value="__('Pago CEAP:')" />
        <input type="file"
            wire:model="imagen"
            id="imagen"
            class="block mt-1 w-full"
            accept="image/*"
        />

        <div class="my-5">
            @if ($imagen)
                Pago CEAP:
                <img src="{{ $imagen->temporaryURL() }}">
            @endif

        @error('imagen')
            {{$message}}
        @enderror
        </div>

    </div> --}}

    <x-primary-button>
        Editar solicitud de certificado
    </x-primary-button>

</form>