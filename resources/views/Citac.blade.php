@extends('layouts.here')

@section('content')
    <div class="container">
        <div class="container">
            <div class="row">

                <br>

                    <div class="col-md-6 mb-3">
                        <label for="validationDefault01">ID</label>
                        <input type="text" class="form-control" id="validationDefault01"  required>
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">Servicio</label>
                        <input type="text" class="form-control" id="validationDefault03" required>
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">Ventanilla</label>
                        <input type="text" class="form-control" id="validationDefault03" required>
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">Sucursal</label>
                        <input type="text" class="form-control" id="validationDefault03" required>
                    </div>



                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">Usuario</label>
                        <input type="text" class="form-control" id="validationDefault03" required>
                    </div>



                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">Fecha</label>
                        <input type="text" class="form-control" id="validationDefault03" required>
                    </div>



                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">Hora</label>
                        <input type="text" class="form-control" id="validationDefault03" required>
                    </div>



                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">Descripcion</label>
                        <input type="text" class="form-control" id="validationDefault03" required>
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">Estado</label>
                        <input type="text" class="form-control" id="validationDefault03" required>
                    </div>




            </div>
            <div class="form-group">
                <div class="form-check">

                    <div>
                        <br><a href="#" class="btn btn-primary btn-lg active" role="button" type="submit" aria-pressed="true">Guardar</a>
                        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Editar</a>
                        <a href="#" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Eliminar</a><br>
                    </div>

                    </form>



                </div>
            </div>



    </div>
@endsection
