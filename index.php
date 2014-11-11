<?php 
  require("header.php");
?>
<section id="wrapper-breadcrumb">
  <div class="container">
  </div>
</section>

  <section id="wrapper-content">
      <div class="container">
        <section class="content-top">
          <div class="row">
            <div class="col-md-3">
              <h1>CATEGORÍAS</h1>
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="categorias.php">Maquinarias</a></li>
                <li><a href="categorias.php">Inmuebles Rurales</a></li>
                <li><a href="categorias.php">Equipamientos</a></li>
                <li><a href="categorias.php">Agroinsumos</a></li>
                <li><a href="categorias.php">Servicios</a></li>
                <li><a href="categorias.php">Animales</a></li>
                <li><a href="categorias.php">AgroEmpleos</a></li>
                <li><a href="ayuda.php" class="active">FAQ</a></li>
                <li><a href="quienes-somos.php" class="active">Quienes somos</a></li>
                <li style="border:none;"><a href="contacto.php" class="active">Contacto  </a></li>
              </ul>
            </div>
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-7">

                  <ul class="bxsliderHome">
                    <li><img src="images/imageNews.jpg" class="grow" /></li>
                    <li><img src="images/imageNews.jpg" class="grow" /></li>
                    <li><img src="images/imageNews.jpg" class="grow" /></li>                  
                  </ul>

                  <!--
                  <a href="#">
                    <img src="images/imageNews.jpg" class="img-responsive currentNew shrink " alt="industria web">
                  </a>
                  -->
                </div>
                <div class="col-md-5">
                  <?php require("last_news.php");?>
                </div>
              </div>
            </div>
          </div>
        </section>

<?php 
  require("featured_ads.php");
  require("featured_offer.php");
?>
      </div>
  </section>

  <?php 
    require("footer.php");
  ?>