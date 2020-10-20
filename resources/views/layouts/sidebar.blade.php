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
                <p><a class="btn btn-secondary" href="{{ url('departamento') }}" role="button">Departamento</a></p>
          </span>
            </div>


        <div class="input-group">
            <p><a class="btn btn-secondary" href="{{ url('/home/sucursal/') }}" role="button">Sucursales</a></p>
            </span>
        </div>


        <div class="input-group">
            <p><a class="btn btn-secondary" href="{{ url('/home/ventanilla/') }}" role="button">Ventanilla</a></p>
            </span>
        </div>

        <div class="input-group">
            <p><a class="btn btn-secondary" href="{{ url('/home/servicio/') }}" role="button">Servicio</a></p>
            </span>
        </div>
        <div class="input-group">
            <p><a class="btn btn-secondary" href="{{ url('/home/hventanilla/') }}" role="button">Hora de Ventanillas</a></p>
            </span>
        </div>
        <div class="input-group">
            <p><a class="btn btn-secondary" href="{{ url('/home/cita/') }}" role="button">Cita</a></p>
            </span>
        </div>

        <!-- Sidebar Menu -->

        <ul class="sidebar-menu" data-widget="tree">
            @include('layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
