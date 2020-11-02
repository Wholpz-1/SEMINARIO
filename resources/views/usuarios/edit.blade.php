@extends('layouts.app')

@section('content')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>



    <div class="container">




        <div class="row">
             <form role="form" method="POST" action="{{route('usuarios.update',$usua)}}">
            <br>
           {{ csrf_field() }} {{ method_field('PUT') }}
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Usuario</label>
                    <input type="text" name="nombre" value="{{$usua->name}}" class="form-control" readonly="readonly">
                </div>

            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Dpi</label>
                    <input type="text" name="dpi" value="{{$usua->dpi}}" class="form-control" readonly="readonly">
                </div>

            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Correo</label>
                    <input type="mail" name="correo" value="{{$usua->email}}" class="form-control">
                </div>

            </div>


            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault03">Contraseña</label>
                    <input type="password" name="contra" class="form-control" >
                </div>

            </div>



            <div class="form-row">
                <div class="col-md-6 mb-3">

                        <label>Rol</label>
                         <select class="form-control" name="rol">
                          <option>Selecciones un rol</option>
                          @foreach ($rols as $rol)
                          <option value="{{ $rol -> id }}" {{ old('rol', $usua->rol_id) == $rol->id ? 'selected' : '' }}>{{ $rol -> rol }}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>

                  <div class="form-row">
                  <div class="col-md-6 mb-3">
                        <label for="validationDefault04">Sucursal</label>
                        <select class="livesearch form-control" name="livesearch" required></select>
                    </div>
                </div>

            <div class="form-row">
                 <div class="col-md-6 mb-3">
                <button type="submit" class="btn btn-primary btn-lg active" role="button" type="submit" aria-pressed="true">Guardar</button>
            </div>
            </div>
             </form>

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

