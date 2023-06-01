<form class="md:w-1/2 space-y-5" novalidate>
    <div>
        <x-input-label for="modalidad" :value="__('Modalidad:')" />
        <select
            id="modalidad"
            wire:model='modalidad'
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >
            <option>-- Seleccione Modalidad --</option>
            @foreach ($modalidades as $modalidade)
                <option value="{{ $modalidade->id }}">{{$modalidade->modalidade}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <x-input-label for="no_control" :value="__('Número de control:')" />
        <x-text-input 
            id="no_control"
            class="block mt-1 w-full"
            type="text"
            wire:model="no_control"
            :value="old('no_control')"
            placeholder="Número de control"
        />

        @error('nombre_alumno')
            {{$message}}
        @enderror
    </div>
    <div>
        {{-- Se define el valor Duplicado en el Livewire --}}
        <label for="duplicado">
            <input type="radio" wire:model=tipoSolicitud value="Duplicado">
            Duplicado
        </label>
        <label for="parcial">
            <input type="radio" wire:model=tipoSolicitud value="Parcial">
            Parcial
        </label>
    </div>

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

    <div>
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

    <div>
        <label class="flex items-center">
            <input wire:model="bachillerato" type="checkbox" />
            Copia del certificado de bachillerato
        </label>
        <label class="flex items-center">
            <input wire:model="secundaria" type="checkbox" />
            Copia del certificado de secundaria
        </label>
        <label class="flex items-center">
            <input wire:model="nacimiento" type="checkbox" />
            Copia del certificado de nacimiento
        </label>
        <label class="flex items-center">
            <input wire:model="curp" type="checkbox" />
            CURP
        </label>
        <label class="flex items-center">
            <input wire:model="pago" type="checkbox" />
            Copia pago CEAP
        </label>
    </div>

</form>