<?php 
  require("header.php");
  require("breadcrumb.php");
?>

<section id="wrapper-content">
  <div class="container">
    <section class="content-top">
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <h1>Titulo</h1>
          <p>Empresa<br/>
          Nombre de la empresa</p>
          <img src="images/imgEmpresa.jpg" alt="Nombre Empresa">
          <section>
            <h2>Datos de la empresa</h2>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <a href="#">Facebook</a>
              </div>
              <div class="col-md-6">
                <a href="#">Telefono</a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <a href="#">Twitter</a>
              </div>
              <div class="col-md-6">
                <a href="#">Email</a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <a href="#">Web</a>
              </div>
              <div class="col-md-6">
              </div>
            </div>
          </section>
        </div>


        <div class="col-xs-12 col-md-6">
          <p>
          Ubicación<br/>
          Arrecifes, Buenos Aires
          </p>
          <h2>Acerca de la empresa</h2>
          <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
      </div>
    </section>
    <?php 
      require("featured_ads.php");
    ?>
  </div>
</section>

<?php 
  require("footer.php");
?>