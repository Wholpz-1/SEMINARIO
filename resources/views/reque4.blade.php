
@extends('layouts.reque1')

@section('content')
    <form class="text-center" >
        <div class="card text-center">
            <div class="card-footer text-muted">
                <h1><span class="badge badge-secondary">Primer DPI</span></h1>

            </div>
            <div >

                <h1><span class="badge badge-secondary"></span></h1>

            </div>
            <div class="card-body">
                <head aling="left">

                   <h6>1.	Recibo de pago correspondiente al tipo de solicitud.<span class="badge badge-secondary"></span></h6>
                   <h6>2.	Original y fotocopia vigente de la certificación de la inscripción registral, según corresponda.<span class="badge badge-secondary"></span></h6>
                    <h6>3.	Presentación de Boleto de Ornato, exceptuando los casos que establezca la ley.<span class="badge badge-secondary"></span></h6>

                </head>
                <div class="card-footer text-muted">
                    <h1><span class="badge badge-secondary">Reposición o Renovación de DPI</span></h1>

                </div>
                <head aling="left">

                    <h6>1.	Recibo de pago correspondiente al tipo de solicitud.<span class="badge badge-secondary"></span></h6>
                    <h6>2.	Presentación de Boleto de Ornato, exceptuando los casos que establezca la ley. <span class="badge badge-secondary"></span></h6>


                </head>
            </div>
            <div class="card-footer text-muted">

                <a href="{{ url ('/dpivali/tramites/') }}" class="btn btn-lg btn-secondary">Regresar</a>

                <a href="{{ url ('/') }}" class="btn btn-lg btn-success">Agendar Cita</a>

            </div>
        </div>
    </form>
@endsection
