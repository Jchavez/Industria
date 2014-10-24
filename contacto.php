<?php 
  require("header.php");
  require("breadcrumb.php");
?>

<section id="wrapper-content">
  <div class="container">
    <section class="content-top">
      <div class="row">
        <div class="col-md-9">
          <h1>Contacto</h1>
          <hr>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <p>&nbsp;</p>
          <form role="form">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="Nombre" placeholder="Nombre">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="Apellido" placeholder="Apellido">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="mail" class="form-control" id="Email" placeholder="Email">
                </div>
                 <p>&nbsp;</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <textarea rows="3">Mensaje</textarea>
                <p>&nbsp;</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <button type="submit" class="btn btn-default">Enviar</button>
              </div>
            </div>
          </form>         
        </div>
        <div class="col-md-3">
          <?php 
            require("last_news.php");
          ?>
          <p><img src="images/imageBlank.jpg" alt="" class="hide_this shrink"></p>
          
          <p><img src="images/imageBlank.jpg" alt="" class="hide_this shrink"></p>
          
          <p><img src="images/imageBlank.jpg" alt="" class="hide_this shrink"></p>
        </div>
      </div>
    </section>
  </div>
</section>

<?php 
  require("footer.php");
?>