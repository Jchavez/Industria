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
                <h1 class="capitalize">Datos de mi cuenta</h1>
                <hr>
                </div>
              </div>
              
              <form role="form">
                <div class="row">
                  <div class="col-md-5">
                    <label>Usuario o Empresa</label>
                  </div>
                  <div class="col-md-5">
                    <input type="text" name="user">
                  </div>
                  <div class="col-md-2">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <label>Email</label>
                  </div>
                  <div class="col-md-5">
                    <input type="email" name="email">
                  </div>
                  <div class="col-md-2">
                  </div>
                 </div>
                 <div class="row">
                  <div class="col-md-5">
                    <label>Password</label>
                  </div>
                  <div class="col-md-5">
                    <input type="password" name="pasword">
                  </div>
                  <div class="col-md-2">
                  </div>
                </div>
                <section>
                  <div class="row">
                    <div class="col-md-12">
                      <h2>Datos Personales</h2>
                      <hr>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Nombre</label>
                    </div>
                    <div class="col-md-5">
                      <input type="text" name="name">
                    </div>
                    <div class="col-md-2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Apellido</label>
                    </div>
                    <div class="col-md-5">
                      <input type="text" name="lastname">
                    </div>
                    <div class="col-md-2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Fecha de Nacimiento</label>
                    </div>
                    <div class="col-md-2">
                      <select>
                        <option>Dia</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <select>
                        <option>Mes</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <select>
                        <option>Año</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Ubicaci&oacute;n</label>
                    </div>
                    <div class="col-md-2">
                      <select>
                        <option>ARG</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="province" placeholder="Provincia">
                    </div>
                    <div class="col-md-2">
                      <input type="text" name="ciudad" placeholder="Ciudad">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Direcci&oacute;n</label>
                    </div>
                    <div class="col-md-5">
                      <input type="text" name="address">
                    </div>
                    <div class="col-md-2">
                    </div>
                  </div>
                </section>
              </form>

            </div>
          </div>
        </section>
      </div>
  </section>

<?php 
  require("footer.php");
?>