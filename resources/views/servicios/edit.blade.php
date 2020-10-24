@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('servicio.update',$servicio) }}" role="form" >
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">
    <div class="container">
        <div class="row">

            <br>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault01">Servicio</label>
                    <input type="text" value="{{$servicio->nombre}}" name="servicio" class="form-control" ID="validationDefault01"  required>
                </div>

            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Descripcion</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="4" cols="50">
                        {{$servicio->descripcion}}
                    </textarea>
                </div>

            </div>

            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="validationDefault03">Requisitos</label>
                    <textarea id="descripcion" name="requisitos" class="form-control" rows="4" cols="50">
                        {{$servicio->requisitos}}
                    </textarea>
                </div>

            </div>




            
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <h2>Seleccione Icono</h2>

                    <table id="posts-table" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Imagen</th>
                  <th>ACCIONES</th>
                </tr>
              </thead>
              <tbody>
              @foreach($iconos as $icono)
                <tr>
                  <td>{{$icono->id}}</td>
                  <td>{{$icono->nombre}}</td>
                  <td><img src="{{$icono->url}}" border="1" alt="Este es el ejemplo de un texto alternativo" width="100" height="100"></td>
                  <td>


                <input type="checkbox" value="{{$icono->id}}" name="icono[]" />


                  </td>
                </tr>
            @endforeach
              </tbody>
              <tfoot>

              </tfoot>
            </table>



                </div>
            </div>


            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <h2>Icono Seleccionado</h2>
                   @if ($servicio->icono!=null)

                    <img src="{{$servicio->icono->url}}" border="1" alt="Este es el ejemplo de un texto alternativo" width="400" height="400">
                    @else
                    <h3 style="cneter">Seleccione un Icono</h3>
                    @endif
                </div>
            </div>






        </div>




        <div class="form-group">
            <div class="form-check">

                <div>
                    <button type="submit" class="btn btn-primary btn-lg active" role="button" type="submit" aria-pressed="true">Guardar</button>
                    
                   
                    <a href="#" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Cancelar</a><br>
                </div>





            </div>
        </div>



    </div>
</form>
@endsection

