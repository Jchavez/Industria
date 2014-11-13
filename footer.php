<footer id="wrapper-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <ul>
              <li><a href="empresa.php">Acerca de Industria en la web</a></li>
              <li><a href="pagina_hibrida.php">Condiciones</a></li>
              <li style="border:none;"><a href="pagina_hibrida.php">Privacidad</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul>
              <li><a href="pagina_hibrida.php">Seguridad</a></li>
              <li><a href="pagina_hibrida.php">Ayuda</a></li>
              <li style="border:none;"><a href="mailto:info@industriaenlaweb.com">info@industriaenlaweb.com</a></li>
            </ul>
          </div>
          <div class="col-md-3">
              <div class="social">
                <a href="http://gmail.com" target="_blank" title="" class="icons iconGmail" id="iconGmail">Gmail</a>
                <a href="https://twitter.com" target="_blank" title="" class="icons iconTwitter">Twitter</a>
                <a href="https://www.facebook.com" target="_blank" title="" class="icons iconFacebook">Facebook</a>
              </div>
              <p class="social">Seguinos en las <br/>Redes Sociales</p>
          </div>
          <div class="col-md-3">
            <p class="info"><img src="images/iconDesarrolloRendoro.jpg" alt="Desarrollo Rendoro">
            Desarrollo<br/> Rendoro Software</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="copyright">Copyright 2014 Industria en la web .com</p>
          </div>
        </div>
      </div>
  </footer>

<!-- Modals -->
<div class="modal fade" id="account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
      <section>
        <h1>MI CUENTA</h1>
        <form>
        <div class="form-group">
          <label>Email o Usuario</label>
          <input type="text" class="form-control" id="user" placeholder="">
        </div>
        <div class="form-group">
          <label>Contraseña</label>
          <input type="password" class="form-control" id="user" placeholder="">
        </div>
        <div class="form-group">
          <p>
          <a href="#" data-toggle="modal" data-target="#lostpass">Olvid&eacute; mi contraseña</a> | <a href="#" data-toggle="modal" data-target="#register">Nuevo Usuario</a>
          </p>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-default">ENTRAR</button>
        </div>
        </form>
      </section>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="lostpass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
      <section>
        <h1>OLVIDE MI CUENTA</h1>
        <form>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" id="email" placeholder="">
        </div>
        <div class="form-group">
          <p> Le enviaremos un email a su casilla de correo con los datos<br/>
            de acceso.<br/>
            *Debe estar registrado como usuario.
            *Si no est&aacute; registrado como <a href="#" data-toggle="modal" data-target="#register">h&aacute;galo ahora</a>
          </p>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-default">RECORDAR</button>
        </div>
        </form>
      </section>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
      <section>
        <h1>NUEVO USUARIO</h1>
        <form>
        <div class="form-group">
          <label>Email o Usuario</label>
          <input type="text" class="form-control" id="user" placeholder="">
        </div>
        <div class="form-group">
          <label>Coontraseña</label>
          <input type="password" class="form-control" id="password" placeholder="">
        </div>
        <div class="form-group">
          <label>Nombre y Apellido</label>
          <input type="text" class="form-control" id="fullname" placeholder="">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" id="email" placeholder="">
        </div>
        <div class="form-group">
          <label>Ubicaci&oacute;n</label>
          <input type="text" class="form-control" id="address" placeholder="">
        </div>
        <div class="form-group">
          <label>Actividad</label>
          <select>
            <option></option>
          </select>
        </div>
        <div class="form-group">
          <label>Tel&eacute;fono</label>
          <input type="text" class="form-control" id="telephone" placeholder="Ej:(011) 5555-5555">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-default">REGISTRARME</button>
        </div>
        </form>
      </section>
      </div>
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"  type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script> 
<script src="js/compiled.js"></script>
<!-- bxSlider Javascript file -->
<script src="js/jquery.bxslider.min.js"></script> 
</body>
</html>
