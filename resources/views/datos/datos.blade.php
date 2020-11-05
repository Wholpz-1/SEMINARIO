@extends('layouts.app')

@section('content')

  

    <div class="container">

      <h1>Datos</h1>

        <div class="card-body">

          <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault01">Sucursal</label>
                    <input type="text" value="{{$sucursal->sucursal}}" readonly="readonly" name="sucursal" class="form-control" ID="validationDefault01"  required>
                </div>

            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Total</label>
                    <input type="text" value="{{$sucursal->citas->count()}}" name="sucursal" class="form-control" readonly="readonly">
                </div>

            </div>


            <table id="posts-table" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Solicitadas</th>
                  <th>Canceladas</th>
                  <th>Completadas</th>
                  
                </tr>
              </thead>
              <tbody>
               
           
                <tr>
                  <td>{{$solicitada->count()}}</td>
                  <td>{{$cancelada->count()}}</td>
                  <td>{{$terminada->count()}}</td>
                  


                
                </tr>
              
              </tbody>
              <tfoot>

              </tfoot>
            </table>
          </div>


                   

</div>





@endsection



