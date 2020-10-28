@extends('layouts.here')

@section('content')



  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>



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
                        <select class="livesearch form-control" name="livesearch"></select>
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

<script type="text/javascript">
    $('.livesearch').select2({
        placeholder: 'Selecciones Sucursal',
        ajax: {
            url: '{{route ('agendar.getsucursal')}}',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.sucursal,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });
</script>



@endsection
