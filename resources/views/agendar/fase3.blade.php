@extends('layouts.here')

@section('content')



<form role="form" method="POST" action="{{route('agendar.store',[$user,$servicio])}}">
     {{ csrf_field() }}


    <div class="container">
        <div class="container">
            <div class="row">

                <br>
                <div class="col-md-12 mb-12">
                <h1>Tercera Fase</h1>
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
                        <input type="text" class="form-control" name="servcio" id="servicio" value="{{$servicio->nombre}}" readonly="readonly">
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="validationDefault04">Sucursal</label>
                        <input type="hidden" name="sucursal_id" value="{{$sucursal->id}}">
                        <input type="text" class="form-control" name="sucursal" id="sucursal" value="{{$sucursal->sucursal}}" readonly="readonly">
                    </div>
                    <div class="col-md-12 mb-3">
                     <h2>Ventanilla</h2>
                     </div>

                     <div class="col-md-6 mb-3">
                        <label for="validationDefault05">Ventanilla</label>
                        <select class="ventanilla form-control" name="ventanilla" readonly="readonly" >
                        <option value="{{$ventanilla->id}}">{{$ventanilla->ventanilla}}</option> 
                        </select>
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="validationDefault06">Fecha</label>
                        <input class="form-control" name="fecha" value="{{$fecha}}" id="date" type="input" readonly="readonly">
                    </div>


                     <div class="col-md-12 mb-3">
                     <h2>Horario Disponibles</h2>
                     </div>


                     <div class="col-md-6 mb-3">
                        <label for="validationDefault05">Horarios</label>
                        <select class="ventanilla form-control" name="hora" required>
                         
                       @foreach($prueba as $p)

                        
                                    <option value="{{$hora->id}}">{{$hora->hora}}</option> 
                               
                          @endforeach
                        </select>
                    </div>

            </div>
            <div class="form-group">
                <div class="form-check">

                      <div>

                        <button type="submit" class="btn btn-primary btn-lg active" role="button" type="submit" aria-pressed="true">Agendar Cita</button>

                       
                        <br>
                    </div>

                   



                </div>
            </div>



    </div>
</div>

</form>



@endsection
