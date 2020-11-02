<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg" class="img-circle"
                     alt="User Image"/>
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                <p>InfyOm</p>
                @else
                    <p>{{ Auth::user()->name}}</p>
                @endif
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
            </div>
        </form>

            <div class="input-group">
            <span><p><a class="btn btn-secondary" href="{{ url('/cita/Solicitada/') }}" role="button">Cita Solicitadas</a>
            </p>
            </span>
             </div>

             <div class="input-group">
            <span><p><a class="btn btn-secondary" href="{{ url('/cita/Cancelada/') }}" role="button">Cita Canceladas</a>
            </p>
            </span>
             </div>

             <div class="input-group">
            <span><p><a class="btn btn-secondary" href="{{ url('/cita/Terminada/') }}" role="button">Cita Compleatadas</a>
            </p>
            </span>
             </div>



            @if( Auth::user()->rol->rol=='Administrador')

            <div class="input-group">
              <span>  <p><a class="btn btn-secondary" href="{{ url('departamento') }}" role="button">Departamento</a></p>
          </span>
            </div>


        <div class="input-group">
           <span> <p><a class="btn btn-secondary" href="{{ url('sucursales')}}" role="button">Sucursales</a></p>
            </span>
        </div>


        <div class="input-group">
            <span><p><a class="btn btn-secondary" href="{{ url('servicios') }}" role="button">Servicio</a></p>
            </span>
        </div>
       
        
        <div class="input-group">
            <span><p><a class="btn btn-secondary" href="{{ url('iconos') }}" role="button">Iconos</a></p>
            </span>
        </div>

        <div class="input-group">
            <span><p><a class="btn btn-secondary" href="{{ url('usuarios') }}" role="button">Usuarios</a></p>
            </span>
        </div>

        @endif

        <!-- Sidebar Menu -->

        <ul class="sidebar-menu" data-widget="tree">
            @include('layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
