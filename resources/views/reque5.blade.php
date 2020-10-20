
@extends('layouts.reque1')

@section('content')
    <form class="text-center" >
        <div class="card text-center">
            <div class="text-center">

                <h1><span class="badge badge-secondary">Requisitos</span></h1>

            </div>
            <div class="card-header">
                Al momento de realizar su tramite debe de presentar los siguientes documentos:
            </div>
            <div class="card-body">
                <head aling="left">

                </head>
                <h6> 1.	Tres (3) certificaciones de la resolución de declaración de reconocimiento de guatemalteco naturalizado, extendidas por el Ministerio de Relaciones Exteriores <span class="badge badge-secondary"></span></h6>
                <h6> las cuales deberán haber sido emitidas dentro de los seis (6) meses anteriores a su presentación; <span class="badge badge-secondary"></span></h6>
                <h6> 2.	Original y fotocopia del documento de identificación; <span class="badge badge-secondary"></span></h6>
                <h6> 3.	En caso de ser menor de edad deberá comparecer con sus padres o con quien ejerza su representación legal, debiendo acreditar dicho extremo con los documentos que <span class="badge badge-secondary"></span></h6>
                <h6>     correspondan, además de los respectivos documentos de identificación de los comparecientes.<span class="badge badge-secondary"></span></h6>


            </div>
            <div class="card-footer text-muted">

                <a href="{{ url ('/dpivali/tramites/') }}" class="btn btn-lg btn-secondary">Regresar</a>

                <a href="{{ url ('/') }}" class="btn btn-lg btn-success">Agendar Cita</a>

            </div>
        </div>
    </form>

@endsection
