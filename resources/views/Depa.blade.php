@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <br>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault01">ID</label>
                        <input type="text" class="form-control" id="validationDefault01"  required>
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">Departamento</label>
                        <input type="text" class="form-control" id="validationDefault03" required>
                    </div>

                </div>


                    </div>
                    <div class="form-group">
                        <div class="form-check">

                <div>


                    <br><a href="#" class="btn btn-primary btn-lg active" role="button" type="submit" aria-pressed="true">Guardar</a>
                    <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Editar</a>
                    <a href="#" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Eliminar</a><br>


                </div>





        </div>



@endsection



