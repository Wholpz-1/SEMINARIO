@extends('layouts.app')

@section('content')

     <div>
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
                  <th>Sucursal</th>
                  <th>Municipio</th>
                  <th>ACCIONES</th>
                </tr>
              </thead>
              <tbody>
              @foreach($sucursal as $sucur)
                <tr>
                  <td>{{$sucur->id}}</td>
                  <td>{{$sucur->sucursal}}</td>
                  <td>{{$sucur->municipio->municipio}}</td>
                  <td>


                    <form action="{{route('sucursal.destroy', $sucur->id)}}" method="post">
                      {{csrf_field()}}
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
  <form role="form" method="POST" action="{{route('departamento.store')}}">
    {{ csrf_field() }}
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear Un Departamento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del Departamento">
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



