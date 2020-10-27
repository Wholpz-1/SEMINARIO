@extends('layouts.here')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('select2/dist/css/select2.min.css')}}">

    <!-- Script -->
    <script src="{{asset('jquery-3.4.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('select2/dist/js/select2.min.js')}}" type="text/javascript"></script>



    <div class="container">
        <div class="container">
            <div class="row">

                <br>

                    <div class="col-md-6 mb-3">
                        <label for="validationDefault01">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{$user->name}}" readonly="readonly">
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="validationDefault02">DPI</label>
                        <input type="text" class="form-control" name="dpi" id="dpi" value="{{$user->dpi}}"readonly="readonly" >
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">Servicio</label>
                        <input type="text" class="form-control" name="servcio" id="servicio" value="{{$servicio->nombre}}" readonly="readonly">
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="validationDefault04">Sucursal</label>
                        <select id='selUser' name="sucursal" class="form-control">
                          <option value='0'>-- Select user --</option>
                        </select>
                    </div>



            </div>
            <div class="form-group">
                <div class="form-check">

                    <div>
                        <br><a href="#" class="btn btn-primary btn-lg active" role="button" type="submit" aria-pressed="true">Siguiente</a>
                        <br>
                    </div>

                   



                </div>
            </div>



    </div>
</div>

 <!-- Script -->
    <script type="text/javascript">

    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){

      $( "#selUser" ).select2({
        ajax: { 
          url: "{{route('agendar.getsucursal')}}",
          type: "post",
          dataType: 'json',
          delay: 250,
          data: function (params) {
            return {
              _token: CSRF_TOKEN,
              search: params.term // search term
            };
          },
          processResults: function (response) {
            return {
              results: response
            };
          },
          cache: true
        }

      });

    });
    </script>



@endsection
