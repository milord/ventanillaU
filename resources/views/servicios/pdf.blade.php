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
            margin-top:150px;
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
                <p style="text-align:right">Número de folio.: {{ str_pad($servicio->id, 2, '0', STR_PAD_LEFT) }}/2023</p>
                <p style="text-align:right">Fecha de recepción: {{ $servicio->created_at->format('d/m/Y') }}
            </div>
        </div>
        <div>
            <p style="text-align: center;">
                CARTA COMPROMISO DE SERVICIO SOCIAL
            </p>
        </div>
    </header>
    <main>

        <div>
            <p> Con la finalidad de dar cumplimiento a lo que establece la Ley Reglamentaria del Artículo 5º. Constitucional relativo a la prestación</p>
            <p style=" display: flex;justify-content: space-between;"> del Servicio Social de Estudiantes, el (la) que suscribe C.
                <span style="text-transform:none;font-weight:bold;margin-right:20px;"> {{ $servicio->apaterno . " " . $servicio->amaterno . " " . $servicio->nombres_alumno }} </span> con domicilio en </p>
            <p style=" display: flex;justify-content: space-between;"> <span style="text-transform:none;font-weight:bold;margin-right:20px;">
                    {{ $servicio->domicilio }} 
                </span> en la colonia <span style="text-transform:none;font-weight:bold;margin-right:20px;">
                    {{ $servicio->colonia }}
                </span> con el código postal <span style="text-transform:none;font-weight:bold;margin-right:20px;">
                    {{ $servicio->cp }}
                </span> y que estudia el <span style="text-transform:none;font-weight:bold;margin-right:20px;">
                    {{ $servicio->semestre->semestre }}
                </span>
            </p>

            <p style=" display: flex;justify-content: space-between;">
        
                de la especialidad TÉCNICO EN
                <span style="text-transform:none;font-weight:bold;margin-right:20px;">
                    {{ $servicio->especialidade->especialidade }}
                </span> en el <span style="text-transform:none;font-weight:bold;margin-right:20px;">
                    CETis 112
                </span> con clave <span style="text-transform:none;font-weight:bold;margin-right:20px;">
                    31DCT0390G
                </span>
            </p>
            
            <p style=" display: flex;justify-content: space-between;">
                y ubicado en la calle
                <span style="text-transform:none;font-weight:bold;margin-right:20px;">
                    55 No. 728
                </span>
                de la colonia
                <span style="text-transform:none;font-weight:bold;margin-right:20px;">
                    PACABTÚN
                </span>
                población
                <span style="text-transform:none;font-weight:bold;margin-right:20px;">
                    MÉRIDA
                </span>
                estado
                <span style="text-transform:none;font-weight:bold;margin-right:20px;">
                    YUCATÁN
                </span>
               
                
            </p>

            <p style=" display: flex;justify-content: space-between;">
                télefono <span style="text-transform:none;font-weight:bold;margin-right:20px;">
                    9999824090
                </span>
                solicito autorización para prestar mi Servicio Social en
                <span style="text-transform:none;font-weight:bold;margin-right:20px;">
                    VECTEL
                </span>
                
            </p>

            <p style=" display: flex;justify-content: space-between;">
                cuya fecha de inicio  será
                <span style="text-transform:none;font-weight:bold;margin-right:20px;">
                    {{ $servicio->inicia_servicio}}
                </span>
                y terminará
                <span style="text-transform:none;font-weight:bold;margin-right:20px;">
                    {{ $servicio->termina_servicio}}
                </span>
            </p>
            <br>

            <p style=" display: flex;justify-content: space-between;">
                Comprometiéndome a sujetarme a los lineamientos del Servicio Social   y a cumplirlo   en   la forma   y   tiempo   indicada, </p>
            <p style=" display: flex;justify-content: space-between;">
                así como a observar una conducta ejemplar durante la permanencia en el lugar de trabajo, a fin de acrecentar el prestigio del plantel</p>
            <p style=" display: flex;justify-content: space-between;">   
                y de la Dirección General de Educación Tecnológica Industrial. </p>
            <p style=" display: flex;justify-content: space-between;">
                De   no   hacerlo   así, me   doy   de   enterado(a) de que no me será extendida la constancia de acreditación del Servicio Social.</p>
                
            </p>
            <br>
            <br>

            <p style="text-align:center">_______________________</p>
            <p style="text-align:center">{{ $servicio->nombres_alumno . " " . $servicio->apaterno . " " . $servicio->amaterno }} </p>
            <p style="text-align:center">Nombre y firma del prestador</p>

            <br>
            <br>

            <p style="text-align:center">_______________________</p>
            <p style="text-align:center">Andrés José Cetina Ponce</p>
            <p style="text-align:center">Jefe de Servicios Escolares T.V.</p>
           
            <br>
            <br>
            <p style="text-align:center">_______________________</p>
            <p style="text-align:center">ERIKA BERENICE ZEPEDA CERVANTES</p>
            <p style="text-align:center">Directora del Plantel</p>

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