<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>RenapCitas</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <img src="https://scontent.faqb1-1.fna.fbcdn.net/v/t1.0-9/18222708_2042755282408382_6807746146910715824_n.png?_nc_cat=109&_nc_sid=174925&_nc_ohc=YFYVlYMZZCoAX98Rahl&_nc_oc=AQkLQWZ20iQAFInKmt06kd725nKR1CezqZ-thpHkgi_uUNDgnmiD2V-A6ex_uYNTxE0&_nc_ht=scontent.faqb1-1.fna&oh=17e591b3b54d1c8a2b25df0364c45183&oe=5FAC7557" width="100px" height="100px">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url ('/dpivali/tramites/') }}">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>

            </ul>

        </div>
    </nav>
</header>

<main role="main">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.renap.gob.gt/sites/default/files/fondo-banner-comunicado-renap.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.renap.gob.gt/sites/default/files/banner-inforenap-002-fondo.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.discordapp.com/attachments/711314031587098658/766434283890933780/unknown.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="text-center">

        <h1><span class="badge badge-secondary">Requisitos</span></h1>

    </div>


    <form class="text-center" >
        <div class="card text-center">
            <div class="card-header">
                Al momento de realizar su tramite debe de presentar los siguientes documentos:
            </div>
            <div class="card-body">
                <head aling="left">
                    <h6>1. Documento Personal de Identificación -DPI- del padre y de la madre o sólo de la madre, en su caso  <span class="badge badge-secondary"></span></h6>
                    <h6>2. Documento Personal de Identificación -DPI- del compareciente, cuando éste sea distinto a los padres<span class="badge badge-secondary"></span></h6>
                    <h6>3. Informe de nacimiento, extendido por centro hospitalario, médico, enfermera(o) o comadrona acreditada(o) por el <span class="badge badge-secondary"></span></h6>
                    <h6>Ministerio de Salud Pública y Asistencia Social, cuerpo de bomberos o autoridad local  <span class="badge badge-secondary"></span></h6>
                </head>
            </div>

        </div>

        </div>
    </form>

        <div class="text-center">
        <div class="card-footer text-muted">

         <a href="{{ url ('/dpivali/tramites/') }}" class="btn btn-lg btn-secondary">Regresar</a>

        <a href="{{ url ('/tramites/citac') }}" class="btn btn-lg btn-success">Agendar Cita</a>

         </div>
        </div>>

    <!-- FOOTER -->
    <footer class="container">

        <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../js/bootstrap.bundle.min.js"></script>
</html>
