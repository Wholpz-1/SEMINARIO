@extends('layouts.here')

@section('content')

    <div class="text-center">

        <h1><span class="badge badge-secondary">Requisitos De {{$servicio->nombre}}</span></h1>

    </div>


    <form class="text-center" >
        <div class="card text-center">
            <div class="card-header">
                Al momento de realizar su tramite debe de presentar los siguientes documentos:
            </div>
            <div class="card-body">
                <head aling="left">
                    <h6>{!!$servicio->requisitos!!} <span class="badge badge-secondary"></span></h6>
                   
                </head>
            </div>

        </div>

        </div>
    </form>

        <div class="text-center">
        <div class="card-footer text-muted">

         <a href="{{ url ('/dpivali/tramites/') }}" class="btn btn-lg btn-secondary">Regresar</a>

        <a href="{{ route ('agendar.index', [$user,$servicio]) }}" class="btn btn-lg btn-success">Agendar Cita</a>

         </div>
        </div>

   @endsection