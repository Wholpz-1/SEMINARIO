@extends('layouts.app')

@section('content')

  

    <div class="container">

      <h1>Datos</h1>

<form method="POST" action="{{ route('datos.consulta') }}" role="form" >
    {{ csrf_field() }}
      <div class="form-row">
                <div class="col-md-5 mb-3">
                    <label for="validationDefault01">De</label>
                    <input type="date" @if($fecha1!=null)value="{{$fecha1}}" @endif name="fecha1" class="form-control" required>
                </div>

            </div>


            <div class="form-row">
                <div class="col-md-5 mb-3">
                    <label for="validationDefault03">Hasta</label>
                    <input type="date" @if($fecha2!=null)value="{{$fecha2}}" @endif name="fecha2" class="form-control" required >
                </div>

            </div>


            <div class="form-row">

                    <div class="col-md-2 mb-3">

                        <button type="submit" class="btn btn-primary btn-lg active" role="button" type="submit" aria-pressed="true">Filtrar</button>

                       
                        <br>
                    </div>
                </div>
           </form> 


<div class="form-row">

                    <div class="col-md-12 mb-3">

                       <h1>Informacion</h1>

                       
                        <br>
                    </div>
                </div>




        <div class="card-body">
            <table id="posts-table" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Sucursal</th>
                  <th>Cantidad</th>
                  <th>Acciones</th>
                  
                </tr>
              </thead>
              <tbody>
               
              @foreach($sucursals as $sucursal)
                <tr>
                  <td>{{$sucursal->id}}</td>
                  <td>{{$sucursal->sucursal}}</td>
                  <td>{{$sucursal->citas->count()}}</td>
                  


                  <td>


                
                   <a href="{{route('datos.datos', $sucursal)}}" class="col-sm-2 btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>


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



