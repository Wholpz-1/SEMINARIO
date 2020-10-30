@extends('layouts.app')

@section('content')

  

    <div class="container">

      <h1>Todos los Usuarios</h1>

        <div class="card-body">
            <table id="posts-table" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Dpi</th>
                  <th>ACCIONES</th>
                </tr>
              </thead>
              <tbody>
                @php 
                $contador=1;
                @endphp
              @foreach($usuarios as $usu)
                <tr>
                  <td>{{$contador}}</td>
                  <td>{{$usu->name}}</td>
                  <td>
                    {{$usu->dpi}}
                  </td>


                  <td>


                    <a href="{{route('usuarios.edit', $usu)}}" class="col-sm-2 btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>


                  </td>
                </tr>
                @php 
                $contador=$contador+1;
                @endphp
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



