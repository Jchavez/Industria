<?php 
  require("header.php");
  require("breadcrumb.php");
?>


  <section id="wrapper-content">
      <div class="container">
        <section class="content-top">
          <div class="row">
            <div class="col-md-3 sidebar">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="publicar_anuncio.php">Paso 1 - Categor&iacute;a</a></li>
                <li><a href="publicar_anuncio_2.php">Paso 2 - Anuncio</a></li>
                <li><a href="perfil.php">Volver a Mi Cuenta</a></li>
              </ul>
            </div>
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-12">
                <h1 class="capitalize">¿Qu&eacute; desea Publicar?</h1>
                <hr>
                </div>
              </div>
              
              <form role="form">
                <div class="row">
                  <div class="col-md-5">
                    <label>Busque una Categor&iacute;a</label>
                  </div>
                  <div class="col-md-7">
                    <input type="search" placeholder="ej: tractores, campos, silos">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                  </div>
                  <div class="col-md-7">
                    <select>
                      <option>Categor&iacute;a</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                  </div>
                  <div class="col-md-7">
                    <select>
                    <option>Sub Categor&iacute;a</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                  </div>
                  <div class="col-md-7">
                    <button type="submit" class="btn btn-default">CONTINUAR</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </section>
      </div>
  </section>

<?php 
  require("footer.php");
?>