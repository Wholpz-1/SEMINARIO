@extends('layouts.reque1')

@section('content')
    <div class="container">
        <div class="text-center">
            <h1>Inscripcion de Recien Nacidos </h1>
            <h1><span class="badge badge-secondary">Requisitos</span></h1>

        </div>


        <form class="text-center" >
            <div class="card text-center">
                <div class="card-header">
                    Al momento de realizar su tramite debe de presentar los siguientes documentos:
                </div>
                <div class="card-body">
                    <head aling="left">
                        <h6>1. Certificación de la resolución judicial;    <span class="badge badge-secondary"></span></h6>
                        <h6>2. Solicitud por escrito del representante legal o tutor; <span class="badge badge-secondary"></span></h6>
                        <h6>3. Certificación de la inscripción de nacimiento del menor o adulto declarado en estado de interdicción. <span class="badge badge-secondary"></span></h6>
                        <h6>4. Boleto de Ornato del año correspondiente, del compareciente, este requisito no aplica para personas exentas del pago de este arbitrio y <span class="badge badge-secondary"></span></h6>
                        <h6>en las inscripciones y anotaciones que sean requeridas mediante resolución judicial. <span class="badge badge-secondary"></span></h6>
                        <h6>5. Formulario proporcionado por el Registro Nacional de las Personas -RENAP-, en los casos de existir, según el tipo de inscripción o anotación.  <span class="badge badge-secondary"></span></h6>
                        <h6>6. Comprobante de pago por concepto de inscripción extemporánea, cuando corresponda.  <span class="badge badge-secondary"></span></h6>


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
