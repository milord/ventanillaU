<div class="p-10">
    <div class="mb-5">
        <p>Folio: {{ $justificante->id }}/2023</p>
        <p>Solicitado el día: {{ $justificante->created_at->format('d/m/Y') }}</p>
        <h3 class="font-bold text-3xl text-gray-800 my-3">
            {{ $justificante->nombre_alumno}}
        </h3>

        <div class="md:grid md:grid-cols-2 bg-gray-50 p-4 my-10">
            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Nombre del tutor:
                <span class="normal-case font-normal">{{ $justificante->nombre_tutor }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Teléfono del tutor:
                <span class="normal-case font-normal">{{ $justificante->telefono_tutor }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Semestre:
                <span class="normal-case font-normal">{{ $justificante->semestre->semestre }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Grupo:
                <span class="normal-case font-normal">{{ $justificante->grupo->grupo }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Especialidad:
                <span class="normal-case font-normal">{{ $justificante->especialidade->especialidade }}</span>
            </p>
            
            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Turno:
                <span class="normal-case font-normal">{{ $justificante->turno->turno }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Dias laborales a justificar:
                <span class="normal-case font-normal">{{ $justificante->dias_laborales }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Inicia ausencia:
                <span class="normal-case font-normal">{{ $justificante->inicia_ausencia }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Termina ausencia:
                <span class="normal-case font-normal">{{ $justificante->termina_ausencia }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Motivo de la inasistencia:
                <span class="normal-case font-normal"></span>
            </p>
        </div>
    
    </div>

    <div class="md:grid md:grid-cols-6 gap-4">
        {{-- <div class="md:col-span-2">
            <img src="{{ asset('storage/justificantes/' . $justificante->imagen  ) }}" alt="{{'Imagen justificante ' . $justificante->nombre_alumno}}">
        </div> --}}

        <div class="md:col-span-4">
            <h2 class="text-2xl font-bold mb-5">Motivo de la inasistencia:</h2>
            <p>{{ $justificante->motivo_inasistencia }}</p>
        </div>
    </div>
</div>
