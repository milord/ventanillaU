<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($certificados as $certificado)
            <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
                <div class="space-y-3">
                    <p class="text-sm text-gray-600 font-bold"> 
                        {{ str_pad($certificado->id, 2, '0', STR_PAD_LEFT) }}
                    </p>
                    <a href"#" class="text-xl font-bold">
                        {{ $certificado->nombre_alumno }}
                    </a>
                    <p class="text-sm text-gray-600">
                        Solicitado el día: {{ $certificado->created_at->format('d/m/Y') }}
                    </p>
                </div>

                <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                    
                    <a                        
                        href="{{ route('certificados.show', $certificado->id) }}"
                        class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
                    >Vista previa</a>
                    <a                        
                        href=" {{ route('certificados.edit', $certificado->id) }}"
                        class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
                    >Editar</a>

                    <button
                        wire:click="$emit('mostrarAlerta', {{ $certificado->id }})"
                        class="bg-red-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
                    >Eliminar</button>

                </div>
            </div>
            @empty
                <p class="p-3 text-center text-sm text-gray-600">No hay certificados que mostrar</p>

        @endforelse

    </div>

    <div class="flex mt-10">
        {{ $certificados->links() }}
    </div>
</div>

@push('scripts')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

        Livewire.on('mostrarAlerta', certificadoId => {
            Swal.fire({
            title: '¿Eliminar Certificado?',
            text: "Recuerda que un certificado eliminado, no se puede volver a recuperar",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, ¡Eliminar!',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    //Eliminar justificante, emitiendo un evento hacia el componente
                    Livewire.emit('eliminarCertificado', certificadoId)
                    Swal.fire(
                        'Certificado eliminado',
                        'El certificado ha sido eliminado correctamente',
                        'success'
                    )
                }
            })
        })

        

    </script>

@endpush    