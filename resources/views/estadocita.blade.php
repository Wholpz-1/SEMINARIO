@extends('layouts.here')

@section('content')



  @if($cita!=null)


    <div class="container">
        <div class="container">
            <div class="row">

                <br>
                <div class="col-md-12 mb-12">
                <h1>Cita # {{$cita->id}}</h1>
                 </div>
                    <br>


                    <div class="col-md-6 mb-3">
                        <label for="validationDefault01">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{$user->name}}" readonly="readonly">
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="validationDefault02">DPI</label>
                        <input type="text" class="form-control" name="dpi" id="dpi" value="{{$user->dpi}}"readonly="readonly" >
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">Servicio</label>
                        <input type="text" class="form-control" name="servcio" id="servicio" value="{{$cita->servicio->nombre}}" readonly="readonly">
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="validationDefault04">Sucursal</label>
                        <input type="text" class="form-control" name="sucursal" id="sucursal" value="{{$cita->sucursal->sucursal}}" readonly="readonly">
                    </div>

                    <div class="col-md-12 mb-3">
                     <h2>Ventanilla</h2>
                     </div>

                     <div class="col-md-6 mb-3">
                        <label for="validationDefault05">Ventanilla</label>
                        <select class="ventanilla form-control" name="ventanilla" readonly="readonly" >
                        <option value="{{$cita->ventanilla->id}}">{{$cita->ventanilla->ventanilla}}</option> 
                        </select>
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="validationDefault06">Fecha</label>
                        <input class="form-control" name="fecha" value="{{$cita->fecha}}" id="date" type="input" readonly="readonly">
                    </div>


                     <div class="col-md-12 mb-3">
                     <h2>Horario De Cita</h2>
                     </div>


                     <div class="col-md-6 mb-3">
                        <label for="validationDefault05">Horarios</label>
                         <input class="form-control" name="fecha" value="{{$cita->horaventanilla->hora}}" id="date" type="input" readonly="readonly">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="validationDefault05">Estado</label>
                         <input class="form-control" name="fecha" value="{{$cita->estado}}" id="date" type="input" readonly="readonly">
                    </div>

            </div>
            



    </div>
</div>

@else

<section class="mainContent clearfix stepsWrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="innerWrapper clearfix stepsPage">
                <div class="row justify-content-center order-confirm">
                  <div class="col-md-8 col-lg-6 text-center">
                    <h2>Error</h2>
                    <span></span>
                    <p class="">
                     Datos no coninciden con ninguna cita agendada verifique nuevamente
                    </p>
                    <a href="/" class="btn btn-primary btn-default">Inicio</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


@endif



@endsection
