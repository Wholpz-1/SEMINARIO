@extends('layouts.app')

@section('content')

    <h1>Departamento De {{$depa->departamento}}</h1>
     <div>  
    <br>
    <button class="btn btn-primary btn-lg active" data-toggle="modal" data-target="#exampleModal" aria-pressed="true">Añadir Municipio
    </button>
      </div>

    <div class="container">
        
        <div class="card-body">
            <table id="posts-table" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Departamento</th>
                  <th>ACCIONES</th>
                </tr>
              </thead>
              <tbody>
              @foreach($depa->municipios as $muni)
                <tr>
                  <td>{{$muni->id}}</td>
                  <td>{{$muni->municipio}}</td>
                  <td>
                    
                    
                    <form action="{{route('municipio.destroy', $depa)}}" method="post">
                      {{csrf_field()}}
                      <input name="_method" type="hidden" value="DELETE">
                      <input name="id" type="hidden" value="{{$muni->id}}">
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
  <form role="form" method="POST" action="{{route('municipio.store',$depa)}}">
    {{ csrf_field() }}
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear Un Municipio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del Cliente">
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



