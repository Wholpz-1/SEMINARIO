@extends('layouts.app')

@section('content')

     <div>

      <h1>Todos Los Servicios</h1>
    <br>
    <button class="btn btn-primary btn-lg active" data-toggle="modal" data-target="#exampleModal" aria-pressed="true">Añadir
    </button>
      </div>

    <div class="container">

        <div class="card-body">
            <table id="posts-table" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Servicios</th>
                  <th>ACCIONES</th>
                </tr>
              </thead>
              <tbody>
              @foreach($servicios as $servicio)
                <tr>
                  <td>{{$servicio->id}}</td>
                  <td>{{$servicio->nombre}}</td>
                  <td>


                    <form action="{{route('servicio.destroy', $servicio->id)}}" method="post">
                      {{csrf_field()}}
                      <input name="_method" type="hidden" value="DELETE">
                       <a href="{{route('servicio.edit', $servicio)}}" class="col-sm-2 btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
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


                    <div class="form-group">
                        <div class="form-check">







        </div>
    </div>

</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form role="form" method="POST" action="{{route('servicio.store')}}">
    {{ csrf_field() }}
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear Un Servicio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del Servicio">
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

@endsection



