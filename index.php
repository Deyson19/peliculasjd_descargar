<!-- Incluyo el archivo especifico para el header -->
<?php include("includes/header.php"); ?>

<!-- zona horaria -->

<?php
// Se configura la zona horaria para mostrar la hora.
date_default_timezone_set('America/Bogota');

?>
<style>
     .carousel {
          margin-top: 15px;
          background-image: url("img/images_app/fondoPok.jpg");
          display: block;
     }

     .card-body {
          background-image: url("img/back.jpg");
          height: auto;
     }

     #titulo {
          color: azure;
          margin-left: -800px;
          text-shadow: 4px 4px black;
          margin-top: 150px;
     }

     #subtitulo {
          color: chocolate;
          margin-left: -930px;
          margin-top: 10px;
          font-family: monospace;
          text-shadow: 3px 3px black;
     }

     #smsCompra {
          color: aliceblue;
          margin-left: -690px;
          margin-top: 10px;
          font-family: monospace;
          size: 10px;
     }

     #logoEnRow {
          width: 100px;
          height: 100px;
          margin-left: -90px;
     }

     #txtSlogan {
          margin-left: 100px;
          color: azure;
     }

     .d-block {
          display: block;
          margin: auto;
     }

     img .d-block {
          background-image: url("img/images_app/fondoPok.jpg");
     }
</style>
<div class="container-fluid mt-3">
     <section class="content-header">
          <div class="center">
               <h3 class="center">
                    <p class="text-center">
                         Página para descargar aplicación PelículasJD
                    </p>
               </h3>
          </div>
</div>

<div class="container">
     <section class="content">

          <div class="card text-center">
               <div class="card-body">
                    <h1 id="titulo">PelículasJD</h1>
                    <h5 id="subtitulo">JDApps</h5>
                    <p id="smsCompra">Compras directas desde la aplicación</p>
                    <div class="container mt-1">
                         <div class="row">
                              <div class="col-sm-3">
                                   <img src="img/logo.png" alt="logoApp" id="logoEnRow">
                              </div>
                              <div class="col-lg-2" id="txtSlogan">
                                   <p>Portal de Televisión en vivo y Películas de estreno.</p>
                              </div>
                              <div class="col-lg-2" id="txtSlogan">
                                   <p>Disfruta de un contenido actualizado y estable.</p>
                              </div>
                              <div class="col-lg-2">
                                   <button style='font-size:24px' type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalVideo">
                                        <i class='fas fa-play'></i>Avances</button>
                              </div>
                              <div class="col-lg-2">
                                   <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#modalDescargar">
                                        <i class="fa fa-download" style="font-size:24px"></i>
                                        Descargar
                                   </button>
                              </div>
                         </div>
                    </div>
     </section>

</div>

<div class="container">
     <div class="carousel">
          <!-- Carousel -->
          <div id="demo" class="carousel slide" data-bs-ride="carousel">


               <!-- Indicators/dots -->
               <div class="carousel-indicators bg-transparent">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="8"></button>
               </div>

               <!-- The slideshow/carousel -->
               <div class="carousel-inner">
                    <div class="carousel-item active">
                         <img src="img/splash_image.png" alt="Home" class="d-block" style="width:30%">
                    </div>
                    <div class="carousel-item">
                         <img src="img/images_app/1.png" alt="Peliculas" class="d-block" style="width:30%">
                    </div>
                    <div class="carousel-item">
                         <img src="img/images_app/2.png" alt="Peliculas" class="d-block" style="width:30%">
                    </div>
                    <div class="carousel-item">
                         <img src="img/images_app/3.png" alt="Navegacion contenido app" class="d-block" style="width:30%">
                    </div>
                    <div class="carousel-item">
                         <img src="img/images_app/4.png" alt="Navegacion contenido app" class="d-block" style="width:30%">
                    </div>
                    <div class="carousel-item">
                         <img src="img/images_app/5.png" alt="Navegacion contenido app" class="d-block" style="width:30%">
                    </div>
                    <div class="carousel-item">
                         <img src="img/images_app/6.png" alt="Navegacion contenido app" class="d-block" style="width:30%">
                    </div>
                    <div class="carousel-item">
                         <img src="img/images_app/7.png" alt="Navegacion contenido app" class="d-block" style="width:30%">
                    </div>
                    <div class="carousel-item">
                         <img src="img/images_app/8.png" alt="Navegacion contenido app" class="d-block" style="width:30%">
                    </div>
               </div>

               <br>
               <br>
               <!-- Left and right controls/icons -->
               <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
               </button>
          </div>
     </div>
</div>


<div class="modal fade" rol="dialog" id="modalVideo">

     <div class="modal-dialog modal-dialog-centered">

          <div class="modal-content center-block">
               <div class="modal-header">
                    <h4 class="modal-title">Video</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
               </div>
               <div class="modal-content">
                    <iframe width="100%" height="500" src="https://youtube.com/embed/JvTQ2xp_GKA?autoplay=0&mute=1&controls=1" allowfullscreen>
                    </iframe>
               </div>
          </div>
     </div>
</div>

<div class="modal fade" rol="dialog" id="modalDescargar">

     <div class="modal-dialog modal-dialog-centered">

          <div class="modal-content center-block">
               <div class="modal-header">
                    <h4 class="modal-title">Descargar Aplicación</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
               </div>
               <div class="modal-content">
                    <div class="row">
                         <div class="col-lg-2">
                              <a href="https://mega.nz/file/oAxiWJDD#umTxZxEG4NyFCRfWhkeS6vRPCFDq5dv8MaSXiPWu_vA">
                                   <button class="btn btn-outline-danger" style="font-size: 24px;" type="button">Mega</button>
                              </a>
                         </div>

                         <div class="col-lg-2">
                              <a href="https://www.mediafire.com/file/790weki2hd5sjcg/PeliculasJD.apk/file" style=" margin-left: 10px;">
                                   <button class="btn btn-outline-primary" style="font-size: 24px;" type="button">Mediafire</button>
                              </a>
                         </div>
                         <div class="col-lg-2">
                              <a href="https://drive.google.com/file/d/17rPyfcXz0aThlT3BQxAKY9txJRwcdT3j/view?usp=sharing" style=" margin-left: 60px;">
                                   <button class="btn btn-outline-success" style="font-size: 24px;" type="button">GoogleDrive</button>
                              </a>
                         </div>

                    </div>
               </div>
          </div>
     </div>
</div>
</div>
</div>
</div>








<!-- Se incluye el archivo correspondiente al footer -->

<?php include("includes/footer.php"); ?>
<!--Get your own code at fontawesome.com-->
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>