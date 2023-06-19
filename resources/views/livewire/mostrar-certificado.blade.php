<div class="p-5">
    
    <div class="mb-5">
        <div class="md:grid md:grid-cols-2 bg-gray-50 p-4 my-5">
            <div>
                <p>Folio: {{ str_pad($certificado->id, 2, '0', STR_PAD_LEFT) }}/2023</p>
                <p>Solicitado el día: {{ $certificado->created_at->format('d/m/Y') }}</p>
            </div>
            
        </div>
        <h3 class="font-bold text-3xl text-gray-800 my-3 text-center">
            {{ $certificado->nombre_alumno }}
        </h3>

        <div class="md:grid md:grid-cols-2 bg-gray-50 p-4 my-10">
            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Tipo de certificado:
                <span class="upper-case font-normal">{{ $certificado->tipo_solicitud }}</span>
            </p>          

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Modalidad de estudio:
                <span class="upper-case font-normal">{{ $certificado->modalidade->modalidade }}</span>
            </p>
            
            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Número de control:
                <span class="upper-case font-normal">{{ $certificado->no_control }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Especialidad o Carrera:
                <span class="upper-case font-normal">{{ $certificado->especialidad }}</span>
            </p>
            
            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Turno:
                <span class="normal-case font-normal">{{ $certificado->turno->turno }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Clave Única de Registro de Población:
                <span class="upper-case font-normal">{{ $certificado->curp }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Teléfono:
                <span class="upper-case font-normal">{{ $certificado->telefono }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Correo:
                <span class="normal-case font-normal">{{ $certificado->correo }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Folio de pago:
                <span class="normal-case font-normal">{{ $certificado->folio_pago }}</span>
            </p>
            
            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Entregó copia de su certificado de bachillerato:
                <span class="normal-case font-normal">{{ $certificado->bachillerato_doc }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Entregó copia de su certificado de secundaria:
                <span class="normal-case font-normal">{{ $certificado->secundaria_doc }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Entregó copia de su acta de nacimiento:
                <span class="normal-case font-normal">{{ $certificado->nacimiento_doc }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Entregó copia de su CURP:
                <span class="normal-case font-normal">{{ $certificado->curp_doc }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Entregó copia de su pago en CEAP:
                <span class="normal-case font-normal">{{ $certificado->pago_doc }}</span>
            </p>

        </div>
        <div class="md:grid md:grid-cols-3 bg-gray-50 p-4 my-10 text-center">
            <div>

                <span class="normal-case font-normal">{{ $certificado->nombre_alumno }}</span> <br />
                Firma del alumno
                
            </div>
            <div>Directora</div>
            <div>Sello de la escuela</div>
        </div>
    </div>

</div>