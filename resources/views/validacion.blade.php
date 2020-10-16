<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Renap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

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
    <link href="../css/cover.css" rel="stylesheet">


</head>
<body class="text-center">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner" >
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <img src="https://scontent.faqb1-1.fna.fbcdn.net/v/t1.0-9/18222708_2042755282408382_6807746146910715824_n.png?_nc_cat=109&_nc_sid=174925&_nc_ohc=YFYVlYMZZCoAX98Rahl&_nc_oc=AQkLQWZ20iQAFInKmt06kd725nKR1CezqZ-thpHkgi_uUNDgnmiD2V-A6ex_uYNTxE0&_nc_ht=scontent.faqb1-1.fna&oh=17e591b3b54d1c8a2b25df0364c45183&oe=5FAC7557" width="100px" height="100px">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="https://www.renap.gob.gt/servicios">Servicios<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a style="color:black;">|</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.renap.gob.gt/estado-tramite-dpi">Estado DPI </a>
                        </li>

                        <li class="nav-item">
                            <a style="color:black;">|</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.renap.gob.gt/contactenos">Contáctenos</a>
                        </li>
                    </ul>

                </div>
            </nav>

            <nav class="nav nav-masthead jnt-cenustify-conteter" a>

            </nav>
        </div>
    </header>

    <main role="main" class="inner cover">
        <form>

            <h5 class="cover-heading">Ingresa Numero de DPI</h5>
            <div class="form-group">

                <input type="number" class="form-control"  max="13" id="exampleInputPassword1" required>
            </div>

            <div class="card mb-3">
                <img src="https://radiotgw.gob.gt/wp-content/uploads/2019/02/DPI.png" class="card-img-top"  width="300px" height="275px">
            </div>



        </form>



        <div class="col-xs-4">

            <p class="lead">
                <a href="{{ url ('/dpivali/tramites/') }}" class="btn btn-lg btn-secondary">Validar</a>
            </p>
        </div>
    </main>


</div>
</body>
</html>
