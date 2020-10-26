@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('ventanilla.update',$ventanilla) }}" role="form" >
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">
    <div class="container">
        <div class="row">

            <br>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault01">Ventanilla</label>
                    <input type="text" value="{{$ventanilla->ventanilla}}" readonly="readonly" name="nombre" class="form-control" ID="validationDefault01"  required>
                </div>

            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Sucursal</label>
                    <input type="text" value="{{$ventanilla->sucursal->sucursal}}" name="sucursal" class="form-control" readonly="readonly">
                </div>

            </div>


      
        </div>

        <div class="form-group">
           <div class="col-md-6 mb-3">
                        <label>Servicios</label>
                        <select name="servicio[]" class="form-control select2" multiple="multiple" data-placeholder="Selecciona Servicios"
                          style="width: 100%;">
                          @foreach ($servicios as $servicio)
                          <option {{ collect(old('servicios', $ventanilla->servicio->pluck('id')))->contains($servicio->id) ? 'selected' : '' }} value="{{ $servicio -> id }}">{{ $servicio -> nombre }}</option>
                          @endforeach
                        </select>
           </div>

           <div class="col-md-6 mb-3">
             <label for="validationDefault01">Estado</label>
            <select class="form-control" name="estado">
                          <option value="Habilitada">Habilitada</option>
                          <option value="Deshabilitada">Deshabilitada</option>
            </select>

            </div>


          </div>
          <div class="form-group">
            <div class="form-check">

                <div>
                    <button type="submit" class="btn btn-primary btn-lg active" role="button" type="submit" aria-pressed="true">Guardar</button>
                    
               <br>
               <br>
                </div>





            </div>
        </div>

    </div>


                      



</form>





<div class="form-row">
   
                <div class="col-md-12 mb-6">
                    <h2>Horarios De Ventanilla</h2>



                    <div>
    <br>
    <button class="btn btn-primary btn-lg active" data-toggle="modal" data-target="#exampleModal" aria-pressed="true">Añadir Horario
    </button>
      </div>

                    <table id="posts-table" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Horario</th>
                  <th>ACCIONES</th>
                </tr>
              </thead>
              <tbody>
              @foreach($ventanilla->horaventanillas as $hora)
                <tr>
                  <td>{{$hora->id}}</td>
                  <td>{{$hora->hora}}</td>
                 
                  <td>

                    <form action="{{route('hora.destroy', $ventanilla)}}" method="post">
                      {{csrf_field()}}
                      <input name="_method" type="hidden" value="DELETE">
                      <input name="id" type="hidden" value="{{$hora->id}}">
                      
                      <button class="col-sm-2 btn btn-xs btn-danger " type="submit"><span class="fa fa-times"></span></button>
                    </form>
              


                  </td>
                </tr>
            @endforeach
              </tbody>
              <tfoot>

              </tfoot>
            </table>



                </div>
            </div>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form role="form" method="POST" action="{{route('hora.store',$ventanilla)}}">
    {{ csrf_field() }}
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear Una Ventanilla</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
            <label for="nombre">Hora</label>
            <input type="time" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Una Hora">
            {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </form>
</div>





@push('styles')
        <link rel="stylesheet" href="/adminlte/plugins/select2/select2.min.css">
        @endpush
        @push('scripts')
        <script src="/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
        <script>
        $('.select2').select2();
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.config.height = 315;
        $('#datepicker').datepicker({
        autoclose: true
        });

        </script>
        @endpush






@endsection

