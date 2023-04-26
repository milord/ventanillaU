<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    @forelse ($justificantes as $justificante)
        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
            <div class="space-y-3">
                <p class="text-sm text-gray-600 font-bold"> {{ $justificante->id }} </p>
                <a href"#" class="text-xl font-bold">
                    {{ $justificante->nombre_alumno }}
                </a>
                <p class="text-sm text-gray-600">
                    Solicitado el día: {{ $justificante->created_at->format('d/m/Y') }}
                </p>
            </div>

            <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                
                <a
                    href=" {{ route('justificantes.edit', $justificante->id )}}"
                    class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
                >Editar</a>

                <a
                    href="#"
                    class="bg-red-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase"
                >Eliminar</a>

            </div>
        </div>
        @empty
            <p class="p-3 text-center text-sm text-gray-600">No hay justificantes que mostrar</p>

    @endforelse

</div>

<div class="flex mt-10">
    {{ $justificantes->links() }}
</div>