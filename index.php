<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>

      <link href="./assets/css/index-styles.css" rel="stylesheet" />

      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

      <link rel="stylesheet" href="./assets/css/index/index.css">

      <title>Document</title>
</head>

<body>
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #727875;">
            <div class="container-fluid ">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                              <a class="nav-link" href="./index.php"><img id="logo" src="./assets/img/motoshop.png"></a>
                        </li>
                  </ul>

                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 20px;">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                              <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Accesosrios</a></li>

                              <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="./cascos.php">Cascos</a></li>

                              <li class="nav-item mx-0 mx-lg-1 dropdown"><a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Motos</a>

                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <li><a class="dropdown-item" href="./adventure.php">Adventure</a></li>
                                          <li><a class="dropdown-item" href="./deportivas.php">Deportivas</a></li>
                                          <li><a class="dropdown-item" href="./lineaZ.php">Linea Z</a></li>
                                          <li><a class="dropdown-item" href="./motonetas.php">Motonetas</a></li>
                                          <li><a class="dropdown-item" href="./trabajo.php">Trabajo</a></li>
                                          <li><a class="dropdown-item" href="./chooper.php">Chooper</a></li>

                                    </ul>

                              </li>


                              <li class="nav-item mx-0 mx-lg-1 dropdown"><a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Login</a>

                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <li><a class="dropdown-item" href="./iniciar.php">Iniciar Sesion</a></li>
                                          <li><a class="dropdown-item" href="./registro.php">Registrarse</a></li>
                                          <li><a class="dropdown-item" href="./admi.php">Otro</a></li>


                                    </ul>

                              </li>
                        </ul>
                        <form class="d-flex">
                              <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search" style="width: 20em;">
                              <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                  </div>
            </div>
      </nav>

      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="padding-top: 100px;">
            <div class="carousel-inner">

                  <div class="carousel-item active" data-bs-interval="5000">
                        <img src="./assets/img/inicio/fay.png" class="d-block w-100" style="height: 510px;" alt="...">
                  </div>
                  <div class="carousel-item">
                        <img src="./assets/img/inicio/one.png" class="d-block w-100" style="height: 510px;" alt="...">
                  </div>
                  <div class="carousel-item">
                        <img src="./assets/img/inicio/thre.png" class="d-block w-100" style="height: 510px;" alt="...">
                  </div>
                  <div class="carousel-item">
                        <img src="./assets/img/inicio/forth.png" class="d-block w-100" style="height: 510px;" alt="...">
                  </div>
                  <div class="carousel-item">
                        <img src="./assets/img/inicio/two.png" class="d-block w-100" style="height: 510px;" alt="...">
                  </div>
                  <div class="carousel-item">
                        <img src="./assets/img/inicio/six.png" class="d-block w-100" style="height: 510px;" alt="...">
                  </div>



            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
            </button>
      </div>
      <div>
            <center style="color: black; background: orange;" class="p-2 ">
                  <h1>Contactanos a traves del número (+52)5564678927</h1>
            </center>
      </div>
      <div class="card bg-dark text-white" size-l>
            <img src="./assets/img/quienesSomos2.png" class="card-img" width="100%" style="height: 580px;">
            <div class="card-img-overlay" id="contenido">
                  <h5 class="card-title fs-1 fst-italic text-center  pt-5 mt-5">Somos</h5>
                  <p class="card-text fs-4 fst-italic text-center">Una empresa dedicada a distribuir y ensamblar Motocicletas dentro de la Ciudad de México.
                        Con 10 años de experiencia y mas de 5 millones de clientes, colocandonos en los primeros lugares de ventas en la zona con mayor confiabilidad en México
                        Nos esforzamos en darle lo mejor a nuestros clientes, hoy en dia contamos con dos distintivos: Somos una empresa certificada y responsable</p>
            </div>
      </div>
      <center style="color: black; background: #C0C0C0;" class="p-2">
            <h1>Conoce todo sobre nuestros articulos para tu motocicleta</h1>
      </center>
      <div class="container" style="background: #E2E2E2;">
            <div class="elemento">
                  <h1 style="text-align: center;">Casco Skully<p class="p-4" style="font-size: 20px;">El casco al pilotar una moto es tan importante como el cinturón de seguridad al conducir un coche, e incluso nos atreveríamos a decir que un poco más, metiendo en la ecuación también al airbag. Es un auténtico salvavidas capaz de reducir enormemente la gravedad de los daños en caso de accidente.</p>
                  </h1>
                  <img id="imagen" src="./assets/img/cascos/3.png">
                  <img id="imagen" src="./assets/img/camaras/camara.png">
                  <h1 style="text-align: center;">Camara 3XA18-B<p class="p-4" style="font-size: 20px;">La Cámara para Motocicleta y Casco - Grabación HD 1080 es tu compañera ideal para correr esos caminos grabando los paisajes que mas te gusten. Ademas podrás estar seguro de almacenar en ella cualquier suceso inesperado que se presente o se conduzca frente a ti, ya sea de terceros o tu persona, incluso así poder demostrar tu testimonio en caso de accidentes.</p>
                  </h1>
                  <h1 style="text-align: center;">Exploradoras Led U7<p class="p-4" style="font-size: 20px;">Le dan un toque de mayor exclusividad y elegancia a tu vehículo
                              Este producto te será de gran ayuda en cualquier momento y le dará tu vehículo un plus ideal llévatelo!
                              Todos nuestros productos salen ensayados de bodega y están 100% protegidos con las transportadoras autorizadas.
                              La iluminación led no tienen ninguna restricción en Colombia, y son aptas para tecno mecánica.
                              Nuestros productos son líderes en seguridad vehicula</p>
                  </h1>
                  <img id="imagen" src="./assets/img/accesorios/exploradora.png">
            </div>
      </div>
      <center style="color: black; background: #C0C0C0;" class="p-2">
            <h1>Contamos con una gran variedad de motocicletas</h1>
      </center>

      <div class="container" style="background: #E2E2E2;">
            <div class="elemento">
                  <img id="imagen" src="./assets/img/motoadventure.png">
                  <h1 style="text-align: center;">Adventure<p class="p-4" style="font-size: 20px;">Elige tu aventura y traza tu ruta. VX Adventure ofrece todo lo que necesitas para explorar y descubrir nuevos caminos sin importar las fronteras.</p>
                  </h1>
                  <h1 style="text-align: center;">Chopper<p class="p-4" style="font-size: 20px;">El estilo clásico de una moto tipo crucero. Ideal para rodar caminos largos gracias a su postura relajada. Simplemente te harás notar en el camino.</p>
                  </h1>
                  <img id="imagen" src="./assets/img/motoChopper.png">
                  <img id="imagen" src="./assets/img/motoDeportiva.png">
                  <h1 style="text-align: center;">Deportivas<p class="p-4" style="font-size: 20px;">Descubre al piloto que llevas dentro y alimenta tu espíritu deportivo rodando en una.</p>
                  </h1>
                  <h1 style="text-align: center;">Motonetas<p class="p-4" style="font-size: 20px;">Trasládate de forma divertida en una moto cómoda, práctica y fácil de manejar gracias a su transimisión automática.</p>
                  </h1>
                  <img id="imagen" src="./assets/img/motoneta.png">
                  <img id="imagen" src="./assets/img/motoTrabajo.png">
                  <h1 style="text-align: center;">Trabajo<p class="p-4" style="font-size: 20px;">Tu compañera ideal para largas jornadas; cómoda, resistente y con alto rendimiento de combustible.</p>

            </div>
      </div>

      <!-- footer -->




      <footer class="footer text-center bg-secondary">
            <div class="container">
                  <div class="row">

                        <div class="col-lg-4 mb-5 mb-lg-0">
                              <h4 class="text-uppercase mb-4">Localización</h4>
                              <p class="lead mb-0">
                                    Boulevard Puerto Aereo Numero 502 Colonia Moctezuma <br />2a
                                    Seccion, Venustiano Carranza, 15530 Ciudad de México
                              </p>
                        </div>

                        <div class="col-lg-4 mb-5 mb-lg-0">
                              <h4 class="text-uppercase mb-4">Siguenos en nuestras redes</h4>
                              <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a> <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a> <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-instagram-in"></i></a> <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-snapchat"></i></a>
                        </div>

                        <div class="col-lg-4">
                              <h4 class="text-uppercase mb-4">Contactanos</h4>
                              <p class="lead mb-0">
                                    +52-5564678927 <br> +52-5555553717 <br>
                              </p>
                        </div>
                  </div>
            </div>
      </footer>


      <div class="copyright py-4 text-center text-white">
            <div class="container">
                  <small>Copyright &copy; Derechos reservados 2021</small>
            </div>
      </div>




</body>

</html>