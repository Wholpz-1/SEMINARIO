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
                <h6> 1.	 Boleto de Ornato del año correspondiente, del compareciente, este requisito no aplica para personas exentas <span class="badge badge-secondary"></span></h6>
                <h6>     del pago de este arbitrio y en las inscripciones y anotaciones que sean requeridas mediante resolución judicial.<span class="badge badge-secondary"></span></h6>
                <h6> 2.  Formulario proporcionado por el Registro Nacional de las Personas -RENAP-, en los casos de existir, según el tipo de inscripción o anotación.<span class="badge badge-secondary"></span></h6>
                <h6> 3.  Comprobante de pago por concepto de inscripción extemporánea, cuando corresponda .<span class="badge badge-secondary"></span></h6>
                <a href="https://www.renap.gob.gt/sites/default/files/archivos-paginas/15-declaracion-aviso-extemporaneo-matri.pdf" class="btn btn-lg btn-danger">Declaracion Jurada</a>

                <a href="https://www.renap.gob.gt/sites/default/files/archivos-paginas/aviso_circunstanciado_para_matrimonio.pdf" class="btn btn-lg btn-danger">Aviso Circustanciados</a>
            </div>
            <div class="card-footer text-muted">

                <a href="{{ url ('/dpivali/tramites/') }}" class="btn btn-lg btn-secondary">Regresar</a>

                <a href="{{ url ('/') }}" class="btn btn-lg btn-success">Agendar Cita</a>

            </div>
        </div>
    </form>

@endsection
