@extends('layouts.reque1')

@section('content')

    <div class="container">


            <div class="text-center">
                <h1>Cambio de Nombre </h1>
                <h1><span class="badge badge-secondary">Requisitos</span></h1>

            </div>


            <form class="text-center" >
                <div class="card text-center">
                    <div class="card-header">
                        Al momento de realizar su tramite debe de presentar los siguientes documentos:
                    </div>
                    <div class="card-body">
                        <head aling="left">
                            <h6>1. Certificación de la resolución judicial;   <span class="badge badge-secondary"></span></h6>
                            <h6>2. Original y fotocopia de la última publicación en el Diario de Centro América.<span class="badge badge-secondary"></span></h6>
                            <h6>3. Boleto de Ornato del año correspondiente, del compareciente, este requisito no aplica para personas exentas del pago <span class="badge badge-secondary"></span></h6>
                            <h6>de este arbitrio y en las inscripciones y anotaciones que sean requeridas mediante resolución judicial. <span class="badge badge-secondary"></span></h6>
                            <h6>4. Formulario proporcionado por el Registro Nacional de las Personas -RENAP-, en los casos de existir, según el tipo de inscripción o anotación. <span class="badge badge-secondary"></span></h6>
                            <h6>5. Comprobante de pago por concepto de inscripción extemporánea, cuando corresponda. <span class="badge badge-secondary"></span></h6>

                        </head>
                    </div>
                </div>
            </form>

            <div class="text-center">
            <div class="card-footer text-muted">

            <a href="{{ url ('/dpivali/tramites/') }}" class="btn btn-lg btn-secondary">Regresar</a>

            <a href="{{ url ('/tramites/citac') }}" class="btn btn-lg btn-success">Agendar Cita</a>

        </div>
            </div>>


        </div>
    </div>
@endsection
