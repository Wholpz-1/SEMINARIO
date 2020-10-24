@extends('layouts.app')

@section('content')

    

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
                      <a href="{{route('sucursal.configuracion.index', $sucur)}}" class="col-sm-2 btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
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



@endsection



