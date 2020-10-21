@extends('layouts.reque1')

@section('content')
    <div class="container">
        <div class="text-center">
            <h1>Certificacion de Doble Nacionalidad</h1>
            <h1><span class="badge badge-secondary">Requisitos</span></h1>

        </div>


        <form class="text-center" >
            <div class="card text-center">
                <div class="card-header">
                    Al momento de realizar su tramite debe de presentar los siguientes documentos:
                </div>
                <div class="card-body">
                    <head aling="left">
                        <h6>1. El Memorial debe contener los nombres y apellidos completos del interesado, edad, nacionalidad, estado civil, profesión u oficio y lugar para recibir notificaciones.    <span class="badge badge-secondary"></span></h6>
                        <h6>2. El peticionario debe ser mayor de edad y el trámite es personal. No se admite representación y sólo pueden efectuar la solicitud personas civilmente capaces. <span class="badge badge-secondary"></span></h6>
                        <h6>3. Los nacionales de cualquier país de Centroamérica deben fundamentar la solicitud de Declaratoria de Nacionalidad Guatemalteca según en el artículo 145 de la Constitución Política de la República.<span class="badge badge-secondary"></span></h6>
                        <h6>4. Los nacionales de Belice deben fundamentar la solicitud de Declaratoria de Nacionalidad Guatemalteca en el artículo 19 Transitorio de la Constitución Política de la República. <span class="badge badge-secondary"></span></h6>
                        <h6>5. Certificación de Extranjero Residente, extendido por la Dirección General de Migración, con anotación expresa en la que conste que dicha inscripción está vigente, o constancia expedida por la misma Dependencia sobre dicho extremo. <span class="badge badge-secondary"></span></h6>
                        <h6>6. Certificación de Extranjero Domiciliado, extendida por el Registro Civil respectivo.<span class="badge badge-secondary"></span></h6>
                        <h6>7. Carta de Nacionalidad, extendido por la Embajada o Consulado de su país de origen.  <span class="badge badge-secondary"></span></h6>
                        <h6>8. Pasaporte extranjero vigente.  <span class="badge badge-secondary"></span></h6>
                        <h6>9. Constancia de carencia de antecedentes penales extendida por la Corte Suprema de Justicia de Guatemala. <span class="badge badge-secondary"></span></h6>
                        <h6>10. Constancia de carencia de antecedentes policíacos extendida por la Dirección General de la Policía Nacional de Guatemala.  <span class="badge badge-secondary"></span></h6>
                        <h6>11. Certificado de carencia de antecedentes policíacos expedido por las autoridades del país en donde el interesado haya residido durante los últimos cinco años, debidamente legalizado.  <span class="badge badge-secondary"></span></h6>
                        <h6>12. Comprobar que cuenta con medios fehacientes para su subsistencia.  <span class="badge badge-secondary"></span></h6>
                        <h6>13. Salvo casos de exoneración basada en la reciprocidad internacional, comprobante de pago de la Cuota Anual de Extranjería (Dirección General de Migración).  <span class="badge badge-secondary"></span></h6>


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
s
