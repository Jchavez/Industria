<?php 
  require("header.php");
  require("breadcrumb.php");
?>


  <section id="wrapper-content">
      <div class="container">
        <section class="content-top">
          <div class="row">
            <div class="col-md-3">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="planes.php">Planes</a></li>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="mensajes.php" class="active">Mensajes</a></li>
                <li><a href="misAnuncios.php" class="active">Mis Anuncios</a></li>
                <li><a href="publicarAnuncio.php" class="active">Publicar Anuncio</a></li>
                <li><a href="estadisticas.php" class="active">Estadisticas</a></li>
              </ul>
            </div>
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-12">
                <h1 class="textCenter">Planes</h1>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <strong class="subtitles textCenter">Gratis</strong>
                  <hr class="separator">
                      <p class="textCenter"><img src="images/iconPlan_gratis.jpg"></p>
                      <p class="textCenter"><a href="#">...</a></p>
                      <p class="textCenter">Cantidad de anuncios - 2</p>
                      <p class="textCenter">Fotos por anuncio - 1</p>
                      <p class="textCenter"><a href="#">...</a></p>
                      <p class="textCenter"><a href="#">...</a></p>
                      <p class="textCenter"><a href="#">...</a></p>
                      <p class="textCenter">Sorporte - Email</p>
                      <p class="textCenter"><a href="#">...</a></p>
                      <p class="textCenter"><a href="#">...</a></p>
                      <p class="textCenter"><a href="#">...</a></p>
                  <hr class="separator">
                  <div class="currency_val">
                    <span class="currency">$</span>
                    <span class="val">0</span>
                  </div>
                  <span class="date_currency">x mes</span>

                  <button type="submit" class="btn btn-default lightBlue">Probar</button>
                </div>
                <div class="col-md-4">
                  <strong class="subtitles textCenter">Premium</strong>
                  <hr class="separator">
                    <p class="textCenter"><img src="images/iconPlan_premiun.jpg"></p>
                    <p class="textCenter">Contratación mínima - 6 meses</p>
                    <p class="textCenter">Cantidad de anuncios - 30</p>
                    <p class="textCenter">Fotos por anuncio - 5</p>
                    <p class="textCenter">Anuncios destacados - 10</p>
                    <p class="textCenter">Video - SI</p>
                    <p class="textCenter">Contactos telefónicos - SI</p>
                    <p class="textCenter">Sorporte - Email/Tel</p>
                    <p class="textCenter"><a href="#">...</a></p>
                    <p class="textCenter"><a href="#">...</a></p>
                    <p class="textCenter"><a href="#">...</a></p>
                  <hr class="separator">
                  <div class="currency_val">
                    <span class="currency">$</span>
                    <span class="val">250</span>
                  </div>
                  <span class="date_currency">x mes</span>
                  <button type="submit" class="btn btn-default lightBlue">Comprar</button>
                </div>
                <div class="col-md-4">
                  <strong class="subtitles textCenter">Plus</strong>
                  <hr class="separator">
                    <p class="textCenter"><img src="images/iconPlan_plus.jpg"></p>
                    <p class="textCenter">Contratación mínima - 6 meses</p>
                    <p class="textCenter">Cantidad de anuncios - 30</p>
                    <p class="textCenter">Fotos por anuncio - 5</p>
                    <p class="textCenter">Anuncios destacados - 10</p>
                    <p class="textCenter">Video - SI</p>
                    <p class="textCenter">Contactos telefónicos - SI</p>
                    <p class="textCenter">Sorporte - Email/Tel</p>
                    <p class="textCenter">Oferta - 1</p>
                    <p class="textCenter">Sin competencia en anuncios - SI</p>
                  <hr class="separator">
                  <div class="currency_val">
                    <span class="currency">$</span>
                    <span class="val">400</span>
                  </div>
                  <span class="date_currency">x mes</span>
                  <button type="submit" class="btn btn-default lightBlue">Comprar</button>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
  </section>

<?php 
  require("footer.php");
?>