<div class="md:grid md:grid-cols-2 bg-gray-50 p-4 my-5">
    <div>
        <p>Folio: {{ str_pad($justificante->id, 2, '0', STR_PAD_LEFT) }}/2023</p>
        <p>Solicitado el día: {{ $justificante->created_at->format('d/m/Y') }}</p>
    </div>
    <div class="font-medium text-sm text-right">
        <p>Subsecretaría de Educación Media Superior</p>
        <p>Dirección General de Educación Tecnológica Industrial y Servicios</p>
        <p>Centro de Estudios Tecnológicos industrial y de servicios No. 112</p>
        <p>"Ignacio María de Allende y Unzaga"</p>
        <p>31DCT0390G</p>
    </div>
</div>