<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?v=2.2">
    <script src="https://kit.fontawesome.com/9b8103ef2f.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2df137ad92.js" crossorigin="anonymous"></script>
    <title>Proyecto</title>
    
</head>
<body>
<nav class="navbar navbar-expand-lg " >
  <div class="container p-0">
    <a class="navbar-brand text-white" href="index.php">
      <img src="img/logo2.png" alt="" width="226" height="40" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Clientes</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Diseño de Páginas Web</a></li>
            <li><a class="dropdown-item" href="#">Páginas Web Adaptativas</a></li>
            <li><a class="dropdown-item" href="#">Páginas Web Autoadministrables</a></li>
            <li><a class="dropdown-item" href="#">Hosting</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contacto</a>
        </li>
      </ul>
      <a class="btn btn-sm btn-outline-light ms-3" for="light-outlined" href="views/login.php" type="submit">Solicitar<br>Presupuesto</a>
    </div>
  </div>
</nav>


<div class="inicio">
  <div class="container ">
    <h2><br></h2>
    <h2 class="titulo mt-5 text-center" style="position: absolute; top: 25%; left: 0; right: 0; text-align: center;">DISEÑO WEB PREMIUM <br><span class="typed"></span></h2>
    <!-- <h2 class="subtitulo text-center">Resultados</h2> -->
    <div style="position: absolute; bottom: 100px; left: 0; right: 0; text-align: center;" id="btn">
    <a href="#seccion2" type="button" class="btn btn-lg btn-outline-secondary mt-5 ">CONOCÉ MÁS</a>
    </div>
    
  </div>

</div>

<div id="seccion2" class="seccion2 pb-0 mb-0">
  <div id="container-seccion2" class="container-fluid bg-light text-dark">
    <div class="row centrar" id="row-seccion2">
      <div class="col-6" >
        <p id="parrafo-especial">ESPECIALISTAS EN DISEÑO DE PÁGINAS WEB</p>
        <div class="titulo d-flex align-items-center titulo-center">
          <img src="img/logo2.png" alt="" width="226" height="60" class="bg-dark me-2">
          <h2 class="titulo d-flex align-items-center" id="h2-seccion2">  DISEÑO WEB</h2>
        </div>
          
        <p id="parrafo-seccion2"> HostMakers brindamos servicio de <b>diseño web premium</b>. <br> Desarrollamos páginas web de alto impacto apuntadas a maximizar resultados. Somos especialistas en generar soluciones a medida y diseño personalizado para cada cliente.</p>
        
      </div>
      <div class="col-6 d-flex align-items-center ">
      <img src="img/logo.png" alt="" class="img-fluid " style="display: inline-block; vertical-align: middle; max-width: 441px; "> 
      </div>
    </div>

  </div>
</div>
  <div class="container-fluid seccion-planes bg-dark pt-5 mt-0">
  <h2 class="text-center ">Comprá tu plan de web hosting sin impuestos extra</h2>
    <div class="planes">
      
      <?php include "hosting/controller/planes.php"?>
      
    </div>
  </div>
<div class="seccion3">
  <div class="container p-5 " >
    <div class="row d-flex align-items-center p-5" id="container-seccion3" >
      <div class="col-6 text-center mx-auto">
        <h2 class="titulo2 ">Nuestra Mision</h2>
        <h3>
        NOS MOTIVA,<br>
        MOVILIZA,<br>
        IMPULSA.
        </h3>
        
<!--         <h2 class="subtitulo2 cambiar"></h2> -->
    </div>
        
      <div class="col-6 mx-auto">
        <p class="parrafo1  text-center">"<b>Realmente creemos</b> que con una estrategia web correcta, comunicación acertada y diseño creativo, tu empresa puede sacar un provecho de internet MUY superior al que imaginas posible."</p>
      </div>
    </div>
  </div>
</div>

<div class="seccion4 bg-light ">
  <div class="container p-5 text-dark">
    <h2 class="text-center">TRABAJOS RECIENTES</h2>
    <p class="text-center"> CONOCÉ CÓMO TRABAJAMOS</p>
  </div>
  <div class="container bg-light" id="container2">
    <div class="photo-gallery">
            <div class="photo">
                <img src="img/biblio.jpg" alt="...">
            </div>
            <div class="photo">
                <img src="img/inteligencia-artificial_1.jpg" alt="...">
            </div>
            <div class="photo">
                <img src="img/pexels-marc-mueller-325111.jpg" alt="...">
            </div>
        </div>
      </div>
  </div>
</div>

<div class="seccion5 ">
  <div class="container mb-5 p-0 seccion5-fondo d-flex align-items-center ">
    <div class="row mb-5 " >
      <div class="col-sm-12 col-md-6 d-flex align-items-center mx-auto">
<!--       .d-sm-none .d-md-block -->
        <div class="container">
        <!-- <h2 class="fs-1 text-center">Diseñamos páginas web<br><span class="cambiar"></span></h2> -->
        <h2 class="fs-1 text-center titulo">
            Diseñamos páginas web<br>
            <span class="cambiar subtitulo"></span>
        </h2>


        </div>
        
      </div>
      <div class="col-6 mx-auto">
        <form method="post" class="row">
          <h1 class="text-center">Consultanos ahora</h1>
          <div class="col-12 mb-3">
            <label for="staticEmail2" class="visually-hidden">Nombre</label>
            <input name="nombre" type="text" class="form-control bg-transparent text-white" id="" placeholder="Nombre">
          </div>
          <div class="col-6 mb-3">
            <label for="staticEmail2" class="visually-hidden">Email</label>
            <input name="email" type="text" class="form-control bg-transparent text-white " id="" placeholder="Email">
          </div>
          <div class="col-6 mb-3">
            <label for="inputPassword2" class="visually-hidden">Telefono</label>
            <input name="telefono" type="number" class="form-control bg-transparent text-white" id="" placeholder="Telefono">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="visually-hidden">Example textarea</label>
            <textarea class="form-control bg-transparent text-white " id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"></textarea>
          </div>
        </form>
    </div>
  </div>
</div>


<section class="servicios contenedor bg-light " id="servicios">
  <h2>Servicios</h2>
  <div class="container p-0  contenido-servicios">
      <div class="servicio">
          <i class="fas fa-headphones-alt"></i>
          <h3 class="text-center">Soporte</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam similique architecto deserunt pariatur, ab soluta sequi voluptatem nostrum debitis rem illo repellendus sint nobis molestias eum vitae earum consequatur dignissimos.</p>
      </div>
      <div class="servicio">
          <i class="fas fa-mobile-alt"></i>
          <h3 class="text-center">Desarollo movil</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam similique architecto deserunt pariatur, ab soluta sequi voluptatem nostrum debitis rem illo repellendus sint nobis molestias eum vitae earum consequatur dignissimos.</p>
      </div>
      <div class="servicio">
          <i class="fas fa-cogs"></i>
          <h3 class="text-center">Software personalizable</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam similique architecto deserunt pariatur, ab soluta sequi voluptatem nostrum debitis rem illo repellendus sint nobis molestias eum vitae earum consequatur dignissimos.</p>
      </div>
      <div class="servicio">
          <i class="fas fa-paint-brush"></i>
          <h3 class="text-center">Diseño web</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam similique architecto deserunt pariatur, ab soluta sequi voluptatem nostrum debitis rem illo repellendus sint nobis molestias eum vitae earum consequatur dignissimos.</p>
      </div>
      <div class="servicio">
          <i class="fas fa-code"></i>
          <h3 class="text-center">Ingenieria de software</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam similique architecto deserunt pariatur, ab soluta sequi voluptatem nostrum debitis rem illo repellendus sint nobis molestias eum vitae earum consequatur dignissimos.</p>
      </div>
      <div class="servicio">
          <i class="fas fa-database"></i>
          <h3 class="text-center">Bases de datos</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam similique architecto deserunt pariatur, ab soluta sequi voluptatem nostrum debitis rem illo repellendus sint nobis molestias eum vitae earum consequatur dignissimos.</p>
      </div>
  </div>
</section>


<footer class="pie-pagina">
  <div class="grupo-1">
      <div class="box">
          <figure>
              <a href="#">
                  <img src="img/logo2.png" alt="">
              </a>
          </figure>
      </div>
      <div class="box">
          <h2>SIGUENOS</h2>
          <div class="red-social">
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-instagram"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-youtube"></a>
          </div>
      </div>
  </div>
  <div class="grupo-2">
      <small>&copy; 2023 <b>Tecnicatura</b> - Todos los Derechos Reservados.</small>
  </div>
</footer>

<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script src="javascript.js?v1.0"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>