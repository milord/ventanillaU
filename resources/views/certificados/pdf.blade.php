<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <style>
        p{
            font-size:13px;
            line-height:0.4;
        }
        span{
            font-size:13px;
            
        }
        footer{
            margin-top:250px;
        }
        img{
            padding:0px 50px 0px 0px;
        }
        .border {
            border: 1px solid black;
            padding: 1px;
        }
    </style>
<body>

    <header>
        <div style="text-align:center">
            <div style="display:inline-block;">
                <img src="{{ public_path('img/logo_izquierdo.png') }}" width="230" height="50"/>
            </div>
            <div style="display:inline-block;">
                
            </div>
            <div style="display:inline-block;">
                <p style="text-align:right">Solicitud No.: {{ str_pad($certificado->id, 2, '0', STR_PAD_LEFT) }}/2023</p>
                <p style="text-align:right">Fecha de recepción: {{ $certificado->created_at->format('d/m/Y') }}
            </div>
        </div>
        <div>
            <p style="text-align: center;">
                Hoja de trámites de certificados parciales y duplicados de terminación de estudios
            </p>
            <p style="text-align: center;">
                Oficina de Control Escolar CETis 112 - Turno {{ $certificado->turno->turno }}
            </p>
        </div>
    </header>
    <main>
        <div style="text-align: center">
            <div style="display: inline-block;">
                <p style="text-align: right">Tipo de certificado: {{ $certificado->tipo_solicitud }}</p>
            </div>
        </div>
        <div style="text-align: center">
            <div style="display: inline-block;">
                <p style="text-align: right">Modalidad de estudio: {{ $certificado->modalidade->modalidade }}</p>
            </div>
        </div>
        <div style="text-align: center">
            <div style="display: inline-block;">
                <p style="text-align: right">Número de control: {{ $certificado->no_control }}</p>
            </div>
        </div>
        <div style="text-align: center">
            <div style="display: inline-block;">
                <p style="text-align: right">Especialidad o Carrera: {{ $certificado->especialidad }}</p>
            </div>
        </div>
        <div style="text-align: center">
            <div style="display: inline-block;">
                <p style="text-align: right">Turno: {{ $certificado->turno->turno }}</p>
            </div>
        </div>
        <div style="text-align: center">
            <div style="display: inline-block;">
                <p style="text-align: right">CURP: {{ $certificado->curp }}</p>
            </div>
        </div>
        <div style="text-align: center">
            <div style="display: inline-block;">
                <p style="text-align: right">Teléfono: {{ $certificado->telefono }}</p>
            </div>
        </div>
        <div style="text-align: center">
            <div style="display: inline-block;">
                <p style="text-align: right">Correo electrónico: {{ $certificado->correo }}</p>
            </div>
        </div>
        <div style="text-align: center">
            <div style="display: inline-block;">
                <p style="text-align: right">Folio de pago CEAP: {{ $certificado->folio_pago }}</p>
            </div>
        </div>
        <div style="text-align: center">
            <div style="display: inline-block;">
                <p style="text-align: right">Copia certificado de Bachillerato: 
                    @if ( $certificado->bachillerato_doc == '1' )
                        <span class="normal-case font-normal">Entregado</span>   
                    @elseif ($certificado->bachillerato_doc == '0')
                        <span class="normal-case font-normal">Pendiente</span>
                    @else
                        <span class="normal-case font-normal">No se capturó en el formulario</span>
                    @endif
                </p>
            </div>
        </div>
        <div style="text-align: center">
            <div style="display: inline-block;">
                <p style="text-align: right">Copia certificado de Secundaria: 
                    @if ( $certificado->secundaria_doc == '1' )
                        <span class="normal-case font-normal">Entregado</span>   
                    @elseif ( $certificado->secundaria_doc == '0' )
                        <span class="normal-case font-normal">Pendiente</span>
                    @else
                        <span class="normal-case font-normal">No se capturó en el formulario</span>
                    @endif
                </p>
            </div>
        </div>
        <div style="text-align: center">
            <div style="display: inline-block;">
                <p style="text-align: right">Copia acta de nacimiento: 
                    @if ( $certificado->nacimiento_doc == '1' )
                        <span class="normal-case font-normal">Entregado</span>   
                    @elseif ( $certificado->nacimiento_doc == '0' )
                        <span class="normal-case font-normal">Pendiente</span>
                    @else
                        <span class="normal-case font-normal">No se capturó en el formulario</span>
                    @endif
                </p>
            </div>
        </div>
        <div style="text-align: center">
            <div style="display: inline-block;">
                <p style="text-align: right">Copia CURP: 
                    @if ( $certificado->curp_doc == '1' )
                        <span class="normal-case font-normal">Entregado</span>   
                    @elseif ( $certificado->curp_doc == '0' )
                        <span class="normal-case font-normal">Pendiente</span>
                    @else
                        <span class="normal-case font-normal">No se capturó en el formulario</span>
                    @endif
                </p>
            </div>
        </div>
        <div style="text-align: center">
            <div style="display: inline-block;">
                <p style="text-align: right">Copia pago CEAP: 
                    @if ( $certificado->pago_doc == '1' )
                        <span class="normal-case font-normal">Entregado</span>   
                    @elseif ( $certificado->pago_doc == '0' )
                        <span class="normal-case font-normal">Pendiente</span>
                    @else
                        <span class="normal-case font-normal">No se capturó en el formulario</span>
                    @endif
                </p>
            </div>
        </div>
    </main>

    <footer>
        <p style="text-align:left; color:#d6b381;">
            <b>Calle 55 No. 728 Col. Pacabtún, Mérida, Yucatán, México, C.P. 97160</b>
        </p>
        <p style="text-align:left">Tel.: 999 9824090</p>
        <p style="text-align:center">www.cetis112.edu.mx</p>
        <p style="text-align:right">cetis112.dir@dgeti.sems.gob.mx</p>
        <img src="{{ public_path('img/footer_panchovilla2023.png') }}" width="720"/>
    </footer>
</body>
</html>