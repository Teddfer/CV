<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta name="author" content="" />
    

    <link rel="shortcut icon" href="<?= URL.'img/favicon.png'?>">
    <title>Mi Portafolio - @yield('title')</title>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?= URL . 'css/bootstrap.css' ?>">
      <!-- Animate.css -->
      <link rel="stylesheet" href="<?= URL . 'css/animate.css' ?>">
      <!-- Awesome Fonts-->
      <link rel="stylesheet" href="<?= URL . 'css/all.min.css' ?>">
      <!-- Flexslider  -->
      <link rel="stylesheet" href="<?= URL . 'css/flexslider.css' ?>">
      <!--Main Styles Css-->
      <link rel="stylesheet" href="<?= URL . 'css/style.css' ?>">
    @yield("mis_Estilos") 
  </head>
  <body>
    
<div id="preloader">
         <div class="pre-container">
            <div class="spinner">
               <div class="double-bounce1"></div>
               <div class="double-bounce2"></div>
            </div>
         </div>
      </div>
      
      <!-- Main menu -->
      <nav id="main-nav">
         <a href="#" class="js-nav-toggle nav-toggle active"><i></i></a>
         <div class="js-fullheight table">
            <div class="table-cell js-fullheight">
               <ul>
                  <li><a href="<?= URL. 'home/inicio'?>">Inicio</a></li>
                  <li><a href="<?= URL. 'home/habilidades'?>">Habilidades</a></li>
                  <li><a href="<?= URL. 'home/experiencia'?>">Experiencia</a></li>
                  <li><a href="<?= URL. 'home/proyectos'?>">Proyectos</a></li>
                  <li><a href="<?= URL. 'home/acerca'?>">Acerca de</a></li>
               </ul>
               <!-- Social -->
               <p class="social-icon">
                  <a href="https://www.facebook.com/TeddferSimpson/"><i class="fab fa-facebook-square"></i></a>
                  <a href="#"><i class="fab fa-twitter-square"></i></a>
                  <a href="https://www.instagram.com/teddfersimpson/"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-dribbble"></i></a>
               </p>
            </div>
         </div>
      </nav>

<div id="page">
   <header class="header";">
            <div class="container">
               <div class="navbar-brand">
                  <div class="row">
                     <div class="col-xs-6">
                        <!-- Logo -->
                        <h1 class="text-left"><a class="logo" href="<?= URL ?>">Mi Portafolio</a></h1>
                     </div>
                  </div>
                  <!-- Nav toggle -->
                  <a href="#" class="js-nav-toggle nav-toggle"><i></i></a>
               </div>
            </div>
   </header>

  <main class="px-3">
    @yield('content')
  </main>

  <footer>
   <div id="footer">
               <div class="container">
                  <div class="row copy-right">
                     <div class="col-md-6 col-md-offset-3 text-center">
                        <!-- Footer logo -->
                        <h2><a class="footer-logo" href="<?= URL ?>">Mi Portafolio</a></h2>
                        <!-- Social -->
                        <p class="social-icon">
                           <a href="https://www.facebook.com/TeddferSimpson/"><i class="fab fa-facebook-square"></i></a>
                           <a href="#"><i class="fab fa-twitter-square"></i></a>
                           <a href="https://www.instagram.com/teddfersimpson/"><i class="fab fa-instagram"></i></a>
                           <a href="#"><i class="fab fa-dribbble"></i></a>
                        </p>
                        <!-- Copyright -->
                        <p><a>Von Braun® 1995–2022 Todos los derechos Reservados &copy;</a></p>
                     </div>
                  </div>
               </div>
            </div>
  </footer>
</div>
    @yield("mis_Scripts")
    <script src="<?= URL. 'js/jquery.min.js'?>"></script>
      <!-- jQuery Easing -->
      <script src="<?= URL. 'js/jquery.easing.1.3.js'?>"></script>
      <!-- Bootstrap -->
      <script src="<?= URL. 'js/bootstrap.min.js'?>"></script>
      <!-- Waypoints -->
      <script src="<?= URL. 'js/jquery.waypoints.min.js'?>"></script>
      <!-- Counters -->
      <script src="<?= URL. 'js/jquery.countTo.js'?>"></script>
      <!-- Flexslider -->
      <script src="<?= URL. 'js/jquery.flexslider-min.js'?>"></script>
      <!-- isotope js -->
      <script src="<?= URL. 'js/isotope.pkgd.min.js'?>"></script>
      <!-- isotope image loader js -->
      <script src="<?= URL. 'js/imagesloaded.pkgd.min.js'?>"></script>
      <!-- Typed -->
      <script src="<?= URL. 'js/typed.min.js'?>"></script>
      <!-- Custom JS -->
      <script src="<?= URL. 'js/custom.js'?>"></script>
   </body>
  </body>
</html>