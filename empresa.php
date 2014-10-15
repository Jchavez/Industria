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
          <p><strong>Empresa</strong><br/>
          Nombre de la empresa</p>
          <img src="images/imgEmpresa.jpg" alt="Nombre Empresa" class="shrink img-responsive">
          <section>
            <h2>Datos de la empresa</h2>
            <hr>
            <div class="row">
              <div class="col-xs-12 col-md-6">
                  <a href="#" target="_blank" title="" class="icons2 iconFacebook2">Fb</a>
                  <a href="#" class="textSocial">Facebook</a>
              </div>
              <div class="col-xs-12 col-md-6">
                  <a href="#" target="_blank" title="" class="icons2 iconTelephone">Tel</a>
                  <a href="#" class="textSocial">Telefono</a>
              </div>
            </div>
            <div class="row"> 
              <div class="col-xs-12 col-md-6">
                  <a href="#" target="_blank" title="" class="icons2 iconTwitter2">Tel</a>
                  <a href="#" class="textSocial">Twitter</a>
              </div>
              <div class="col-xs-12 col-md-6">
                  <a href="#" target="_blank" title="" class="icons2 iconMessage">Email</a>
                  <a href="#" class="textSocial">Email</a>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-md-6">
                  <a href="#" target="_blank" title="" class="icons2 iconWeb">Web</a>
                  <a href="#" class="textSocial">Web</a>
              </div>
              <div class="col-xs-12 col-md-6">
              </div>
            </div>
          </section>
        </div>


        <div class="col-xs-12 col-md-6">
          <br/><br/>
          <p>
          <strong>Ubicación</strong><br/>
          Arrecifes, Buenos Aires
          </p>
          <h2>Acerca de la empresa</h2>
          <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          
          <span class="titleForm">realizar consulta a la empresa</span>
          <form role="form" class="formStyle">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Nombre">
                </div>
                <div class="form-group">
                  <input type="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" placeholder="Telefono">
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-default" value="Enviar">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea rows="4">Mensaje</textarea>
                </div>
              </div>
            </div>
          </form>
          


        </div>
      </div>

    </section>
    <section class="content-bottom">
    <div class="row">
      <div class="col-md-12">
        <a href="#" class="linkButton">ver todos los avisos</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <a href="#"><img src="images/imageAdvice1.jpg" class="img-responsive grow" alt="industria web"></a>
        <a href="#">Telefon&iacute;a</a>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        <strong>&#36; 999,00.-</strong>
      </div>
      <div class="col-md-3">
        <a href="#"><img src="images/imageAdvice2.jpg" class="img-responsive grow" alt="industria web"></a>
        <a href="#">Gastronom&iacute;a</a>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        <strong>&#36; 999,00.-</strong>
      </div>
      <div class="col-md-3">
        <a href="#"><img src="images/imageAdvice3.jpg" class="img-responsive grow" alt="industria web"></a>
        <a href="#">Computaci&oacute;n</a> 
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        <strong>&#36; 999,00.-</strong>
      </div>
      <div class="col-md-3">
        <a href="#"><img src="images/imageAdvice4.jpg" class="img-responsive grow" alt="industria web"></a>
        <a href="#">Telefon&iacute;a</a>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        <strong>&#36; 999,00.-</strong>
      </div>
    </div>
    </section>
    
  </div>
</section>

<?php 
  require("footer.php");
?>