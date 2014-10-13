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
                <li><a href="#">Inmuebles Rurales</a></li>
                <li><a href="#">Equipamientos</a></li>
                <li><a href="#">Agroinsumos</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Animales</a></li>
                <li><a href="#">AgroEmpleos</a></li>
                <li><a href="#" class="active">FAQ</a></li>
                <li><a href="#" class="active">Quienes somos</a></li>
                <li><a href="#" class="active">Contacto  </a></li>
              </ul>
            </div>
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-7">
                  <img src="images/imageNews.jpg" class="img-responsive currentNew" alt="industria web">
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