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
                <p style="text-align: right">Fecha de recepción: {{ $certificado->created_at->format('d/m/Y') }}
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
                <p style="text-align: right">Tipo de certificado: {{ $certificado->tipo_solicitud }}
            </div>
            
        </div>
    </main>