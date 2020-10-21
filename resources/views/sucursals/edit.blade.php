@extends('layouts.app')

@section('content')
    <div class="container">
       <h1>Agregar Sucursal a {{$muni->municipio}}</h1>



        <div class="row">
             <form role="form" method="POST" action="{{route('sucursal.store',$muni)}}">
            <br>
            {{ csrf_field() }}
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Sucursal</label>
                    <input type="text" name="nombre" class="form-control" id="validationDefault03" required>
                </div>

            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Descripcion</label>
                    <input type="text" name="descrip" class="form-control" id="validationDefault03" required>
                </div>

            </div>
            <div class="form-row">
                <button class="btn btn-primary btn-lg active">Guardar</button>
            </div>
             </form>

        </div>
        


      


</div>


@endsection

