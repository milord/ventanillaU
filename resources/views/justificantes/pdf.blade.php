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
            margin-top:80px;
        }
        img{
            padding:0px 50px 0px 0px;
        }
    </style>
<body>
    

    <header>
        <div style="text-align:center">
            <div style="display:inline-block;">
                <img src="{{ public_path('img/logo_izquierdo.png') }}" width="230" height="50"/>

            </div>
            <div style="display:inline-block;">
                <img src="{{ public_path('img/logo_central.png') }}" width="130" height="70"/>

            </div>
            <div style="display:inline-block;">
                <p style="text-align:right">FOLIO: {{$justificante->id}}</p>
                <img src="{{ public_path('img/logo_derecho.png') }}" width="170" height="50"/>

            </div>
        </div>
    </header>
    <main>
        <div>
            <p style="text-align: center;">Mérida Yucatán a <span style="font-weight:bold">{{ $justificante->created_at->translatedFormat('d') }}</span> de <span style="font-weight:bold">{{ $justificante->created_at->translatedFormat('F')  }}</span> del {{ $justificante->created_at->format('Y') }}</p>
            <p style="text-align: center; font-weight:bold">JUSTIFICANTE DE INASISTENCIA</p>
        </div>
        <div>
            <p >ESTIMADO DOCENTE:</p>
            <p >Por este conducto, solicito a ustedes, le sea(n) justificada(s) la(s) inasistencia(s) al alumno(a)  </p>   
            <p style=" display: flex;justify-content: space-between;"><span style="text-transform: uppercase;font-weight:bold;margin-right:20px;">{{ $justificante->nombre_alumno}}</span>  Grado y grupo:<span style="text-transform: uppercase;font-weight:bold;margin-right:20px;">{{$justificante->grupo->grupo}}</span>       Especialidad: <span style="text-transform: uppercase;font-weight:bold">{{ $justificante->especialidade->especialidade }}</span></p>
            <p style=" display: flex;justify-content: space-between;">Motivo: <span style="font-weight:bold;margin-right:20px;">{{ $justificante->motivo_inasistencia}}</span>  días justificados: <span style="font-weight:bold;margin-right:20px;">{{Illuminate\Support\Carbon::parse($justificante->inicia_ausencia )->translatedFormat('F d')}} y {{Illuminate\Support\Carbon::parse( $justificante->termina_ausencia )->translatedFormat('F d')}} de {{Illuminate\Support\Carbon::parse( $justificante->termina_ausencia )->format('Y')}}</span> Turno: <span style="font-weight:bold">{{  $justificante->turno->turno }}</span></p>
            <p style=" display: flex;justify-content: space-between;">Nombre del tutor : <span style="font-weight:bold;margin-right:20px;">{{ $justificante->nombre_tutor}}</span> 	Teléfono del tutor :   <span style="font-weight:bold">{{ $justificante->telefono_tutor}}</span></p>
            <p style=" display: flex;justify-content: space-between;">Cabe mencionar que es responsabilidad del alumno regularizarse en el cumplimiento de sus trabajos y/o tareas que el</p><p style=" display: flex;justify-content: space-between;"> (la) profesor(a) haya solicitado, haciendo mención</p>            
            <p style=" display: flex;justify-content: space-between;">Que el presente documento no EXENTA  al alumno de sus obligaciones académicas.</p>
            <br>
            <p style="text-align:center">ATENTAMENTE</p>
            <p style="text-align:center">_______________________</p>
            <p style="text-align:center">Andrés José Cetina Ponce</p>
            <p style="text-align:center">Jefe de Servicios Escolares T.V</p>
        </div>
    </main>
    <footer>

    </footer>
    <header>
        <div style="text-align:center">
            <div style="display:inline-block;">
                <img src="{{ public_path('img/logo_izquierdo.png') }}" width="230" height="50"/>

            </div>
            <div style="display:inline-block;">
                <img src="{{ public_path('img/logo_central.png') }}" width="130" height="70"/>

            </div>
            <div style="display:inline-block;">
                <p style="text-align:right">FOLIO: {{$justificante->id}}</p>
                <img src="{{ public_path('img/logo_derecho.png') }}" width="170" height="50"/>

            </div>
        </div>
    </header>
    <main>
        <div>
            <p style="text-align: center;">Mérida Yucatán a <span style="font-weight:bold">{{ $justificante->created_at->translatedFormat('d') }}</span> de <span style="font-weight:bold">{{ $justificante->created_at->translatedFormat('F')  }}</span> del {{ $justificante->created_at->translatedFormat('Y') }}</p>
            <p style="text-align: center; font-weight:bold">JUSTIFICANTE DE INASISTENCIA</p>
        </div>
        <div>
            <p >ESTIMADO DOCENTE:</p>
            <p >Por este conducto, solicito a ustedes, le sea(n) justificada(s) la(s) inasistencia(s) al alumno(a)  </p>   
            <p style=" display: flex;justify-content: space-between;"><span style="text-transform: uppercase;font-weight:bold;margin-right:20px;">{{ $justificante->nombre_alumno}}</span>  Grado y grupo:<span style="text-transform: uppercase;font-weight:bold;margin-right:20px;">{{$justificante->grupo->grupo}}</span>       Especialidad: <span style="text-transform: uppercase;font-weight:bold">{{ $justificante->especialidade->especialidade }}</span></p>
            <p style=" display: flex;justify-content: space-between;">Motivo: <span style="font-weight:bold;margin-right:20px;">{{ $justificante->motivo_inasistencia}}</span>  días justificados: <span style="font-weight:bold;margin-right:20px;">{{Illuminate\Support\Carbon::parse($justificante->inicia_ausencia )->translatedFormat('F d')}} y {{Illuminate\Support\Carbon::parse( $justificante->termina_ausencia )->translatedFormat('F d')}} de {{Illuminate\Support\Carbon::parse( $justificante->termina_ausencia )->format('Y')}}</span> Turno: <span style="font-weight:bold">{{  $justificante->turno->turno }}</span></p>
            <p style=" display: flex;justify-content: space-between;">Nombre del tutor : <span style="font-weight:bold;margin-right:20px;">{{ $justificante->nombre_tutor}}</span> 	Teléfono del tutor :   <span style="font-weight:bold">{{ $justificante->telefono_tutor}}</span></p>
            <p style=" display: flex;justify-content: space-between;">Cabe mencionar que es responsabilidad del alumno regularizarse en el cumplimiento de sus trabajos y/o tareas que el</p><p style=" display: flex;justify-content: space-between;"> (la) profesor(a) haya solicitado, haciendo mención</p>            
            <p style=" display: flex;justify-content: space-between;">Que el presente documento no EXENTA  al alumno de sus obligaciones académicas.</p>
            <br>
            <p style="text-align:center">ATENTAMENTE</p>
            <p style="text-align:center">_______________________</p>
            <p style="text-align:center">Andrés José Cetina Ponce</p>
            <p style="text-align:center">Jefe de Servicios Escolares T.V</p>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>