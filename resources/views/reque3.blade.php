@extends('layouts.reque1')

@section('content')
    <form class="text-center" >
        <div class="card text-center">
            <div >

                <h1><span class="badge badge-secondary">Requisitos</span></h1>

            </div>
            <div class="card-header">
                Al momento de realizar su tramite debe de presentar los siguientes documentos:
            </div>
            <div class="card-body">
                <head aling="left">



                <h6> 1.	Nombres y apellidos del fallecido, si fuere posible identificarlo;<span class="badge badge-secondary"></span></h6>
                <h6> 2.	Sexo del fallecido.<span class="badge badge-secondary"></span></h6>
                <h6> 3. Causa de defunción.<span class="badge badge-secondary"></span></h6>
                <h6> 4.	Lugar, fecha y hora del fallecimiento o del levantamiento del cadáver.<span class="badge badge-secondary"></span></h6>
                </head>

            </div>
            <div class="card-footer text-muted">

                <a href="{{ url ('/dpivali/tramites/') }}" class="btn btn-lg btn-secondary">Regresar</a>

                <a href="{{ url ('/') }}" class="btn btn-lg btn-success">Agendar Cita</a>

            </div>
        </div>
    </form>
@endsection
