<?php 
  require("header.php");
?>

<section id="wrapper-content">
  <div class="container">
    <section class="content-top">
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12">
                  <select>
                    <option value="Categorias">Categorias</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <select>
                    <option value="Ubicacion">Ubicacion</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12">
                  <select>
                    <option value="Marca">Marca</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <select>
                    <option value="Filtrar">Filtrar por...</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12">
                  <select>
                    <option value="Ordenar por..">Ordenar por...</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p>Seleccionar su vista</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <?php 
            require("last_news.php");
          ?>
          <p><img src="images/imageBlank.jpg"></p>
          
          <p><img src="images/imageBlank.jpg"></p>
          
          <p><img src="images/imageBlank.jpg"></p>
          
        </div>
      </div>
    </section>
  </div>
</section>

<?php 
  require("footer.php");
?>