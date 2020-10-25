@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('sucursal.update',$sucursal) }}" role="form" >
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">
    <div class="container">
        <div class="row">

            <br>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault01">Sucursal</label>
                    <input type="text" value="{{$sucursal->sucursal}}" readonly="readonly" name="sucursal" class="form-control" ID="validationDefault01"  required>
                </div>

            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Municipio</label>
                    <input type="text" value="{{$sucursal->municipio->municipio}}" name="sucursal" class="form-control" readonly="readonly">
                </div>

            </div>


      
        </div>


    </div>
</form>


 <div class="form-row">
   <div>
    <br>
    <button class="btn btn-primary btn-lg active" data-toggle="modal" data-target="#exampleModal" aria-pressed="true">Añadir Ventanilla
    </button>
      </div>
                <div class="col-md-12 mb-6">
                    <h2>Ventanillas</h2>

                    <table id="posts-table" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Ventanilla</th>
                  <th>Estado</th>
                  <th>ACCIONES</th>
                </tr>
              </thead>
              <tbody>
              @foreach($sucursal->ventanillas as $ventanilla)
                <tr>
                  <td>{{$ventanilla->id}}</td>
                  <td>{{$ventanilla->ventanilla}}</td>
                  <td>{{$ventanilla->estado}}</td>
                  <td>

                    <form action="{{route('ventanilla.destroy', $sucursal)}}" method="post">
                      {{csrf_field()}}
                      <input name="_method" type="hidden" value="DELETE">
                      <input name="id" type="hidden" value="{{$ventanilla->id}}">
                       <a href="{{route('ventanilla.edit', $ventanilla)}}" class="col-sm-2 btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
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
  <form role="form" method="POST" action="{{route('ventanilla.store',$sucursal)}}">
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

