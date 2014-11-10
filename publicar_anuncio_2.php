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
            <li><a href="publicar_anuncio.php">Paso 1 - Categor&iacute;a</a></li>
            <li class="active"><a href="publicar_anuncio_2.php">Paso 2 - Anuncio</a></li>
            <li><a href="perfil.php">Volver a Mi Cuenta</a></li>
          </ul>
        </div>
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-12">
              <h1 class="capitalize">Datos del Anuncio</h1>
              <hr>
            </div>
          </div>
              
          <form role="form">
                <div class="row">
                  <div class="col-md-5">
                    <label>Titulo</label>
                  </div>
                  <div class="col-md-7">
                    <input type="text" name="title">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <label>Ubicaci&oacute;n</label>
                  </div>
                  <div class="col-md-7">
                    <input type="text" name="ubication">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <label>Precio</label>
                  </div>
                  <div class="col-md-7">
                    <input type="text" name="price">
                  </div>
                </div>              
                <div class="row">
                  <div class="col-md-12">
                    <section>
                      <h2>Imagen</h2>
                    </section>
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6 col-md-2">
                      <div class="media_file">
                        <div class="imagefile">
                          <input type="file" name="fileImage0">
                        </div>
                        <span>Imagen Principal</span>
                      </div>
                  </div>
                  <div class="col-xs-6 col-md-2">
                      <div class="media_file">
                        <div class="imagefile">
                          <input type="file" name="fileImage1">
                        </div>
                        <span>Imagen 1</span>
                      </div>
                  </div>
                  <div class="col-xs-6 col-md-2">
                      <div class="media_file">
                        <div class="imagefile">
                          <input type="file" name="fileImage2">
                        </div>
                        <span>Imagen 2</span>
                      </div>
                  </div>
                  <div class="col-xs-6 col-md-2">
                      <div class="media_file">
                        <div class="imagefile">
                          <input type="file" name="fileImage3">
                        </div>
                        <span>Imagen 3</span>
                      </div>
                  </div>
                  <div class="col-xs-6 col-md-2">
                      <div class="media_file">
                        <div class="imagefile">
                          <input type="file" name="fileImage4">
                        </div>
                        <span>Imagen 4</span>
                      </div>
                  </div>
                  <div class="col-xs-6 col-md-2">
                      <div class="media_file">
                        <div class="videofile">
                          <input type="file" name="fileVideo0">
                        </div>
                        <span>Video</span>
                      </div>
                  </div>
                    
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <section>
                      <h2>Caracteristicas</h2>
                    </section>
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <section>
                      <h2>Descripci&oacute;n</h2>
                    </section>
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
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