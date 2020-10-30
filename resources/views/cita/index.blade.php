@extends('layouts.app')

@section('content')

  

    <div class="container">

      <h1>Citas</h1>

        <div class="card-body">
            <table id="posts-table" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Dpi</th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Servicio</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
               
              @foreach($r as $cita)
                <tr>
                  <td>{{$cita->id}}</td>
                  <td>{{$cita->user->name}}</td>
                  <td>{{$cita->user->dpi}}</td>
                  <td>{{$cita->fecha}}</td>
                  <td>{{$cita->horaventanilla->hora}}</td>
                  <td>{{$cita->servicio->nombre}}</td>


                  <td>


                  @if($cita->estado=='Solicitada')
                   <form action="{{route('vercita.update',$cita)}}" method="post">
                      {{ csrf_field() }} {{ method_field('PUT') }}
                      <input type="hidden" name="estado" value="Terminada">
                      <button class="col-sm-2 btn btn-xs btn-info  " type="submit"><span class="fa fa-pencil"></span></button>
                    </form>


                    <form action="{{route('vercita.update',$cita)}}" method="post">
                      {{ csrf_field() }} {{ method_field('PUT') }}
                      <input type="hidden" name="estado" value="Cancelada">
                      <button class="col-sm-2 btn btn-xs btn-danger " type="submit"><span class="fa fa-times"></span></button>
                    </form>

                   @endif


                  </td>
                </tr>
              
            @endforeach
              </tbody>
              <tfoot>

              </tfoot>
            </table>
          </div>


                    <div class="form-group">
                        <div class="form-check">







        </div>
    </div>

</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form role="form" method="POST" action="{{route('icono.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Subir Icono</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del Icono">
           

          </div>

          <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
            <label for="nombre">Seleccione archivo</label>
            <input type="file" name="archivo" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>
  </form>
</div>

@endsection



