<div class="p-5">
    
    <div class="mb-5">
        <div class="md:grid md:grid-cols-2 bg-gray-50 p-4 my-5">
            <div>
                <p>Folio: {{ str_pad($servicio->id, 2, '0', STR_PAD_LEFT) }}/2023</p>
                <p>Solicitado el día: {{ $servicio->created_at->format('d/m/Y') }}</p>
            </div>

        </div>
        <h3 class="font-bold text-3xl text-gray-800 my-3 text-center">
            {{ $servicio->apaterno . " " . $servicio->amaterno . " " . $servicio->nombres_alumno }}
        </h3>

        <div class="md:grid md:grid-cols-2 bg-gray-50 p-4 my-10">

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Domicilio:
                <span class="normal-case font-normal">{{ $servicio->domicilio }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Colonia:
                <span class="normal-case font-normal">{{ $servicio->colonia }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Código postal:
                <span class="normal-case font-normal">{{ $servicio->cp }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Semestre:
                <span class="normal-case font-normal">{{ $servicio->semestre->semestre }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Especialidad:
                <span class="normal-case font-normal">{{ $servicio->especialidade->especialidade }}</span>
            </p>
            
            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Inicia servicio:
                <span class="normal-case font-normal">{{ $servicio->inicia_servicio }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Termina servicio:
                <span class="normal-case font-normal">{{ $servicio->termina_servicio }}</span>
            </p>
           
        </div>
        
    </div>

    
</div>
