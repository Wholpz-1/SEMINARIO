@extends('layouts.here')

@section('content')



 <section class="mainContent clearfix stepsWrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="innerWrapper clearfix stepsPage">
                <div class="row justify-content-center order-confirm">
                  <div class="col-md-8 col-lg-6 text-center">
                    <h2>Cita Confirmada</h2>
                    <span></span>
                    <p class="">
                     Cita solicitada con exito {{$user->name}} <br>
                     presentar este numero a la ventanilla para ser atendido: <br>
                     #{{$cita->id}}
                    </p>
                    <a href="/" class="btn btn-primary btn-default">Inicio</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



@endsection
