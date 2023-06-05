<div class="p-5">
    
    <div class="mb-5">
        <div class="md:grid md:grid-cols-2 bg-gray-50 p-4 my-5">
            
            <div>
                <p>Folio: {{ str_pad($certificado->id, 2, '0', STR_PAD_LEFT) }}/2023</p>
                <p>Solicitado el día: {{ $certificado->created_at->format('d/m/Y') }}</p>
            </div>
            
        </div>
        <h3 class="font-bold text-3xl text-gray-800 my-3 text-center">
            {{ $certificado->nombre_alumno}}
        </h3>

        <div class="md:grid md:grid-cols-2 bg-gray-50 p-4 my-10">
            
            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Teléfono de contacto:
                <span class="normal-case font-normal">{{ $certificado->telefono }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Turno en el que concluyó sus estudios:
                <span class="normal-case font-normal">{{ $certificado->turno->turno }}</span>
            </p>

        </div>
        
    </div>

</div>
