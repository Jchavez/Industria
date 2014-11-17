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
                <li><a href="planes.php">Planes</a></li>
                <li class="active"><a href="perfil.php">Perfil</a></li>
                <li><a href="mensajes.php" class="active">Mensajes</a></li>
                <li><a href="categorias-listado.php" class="active">Mis Anuncios</a></li>
                <li><a href="publicar_anuncio.php" class="active">Publicar Anuncio</a></li>
                <li><a href="pagina_hibrida.php" class="active">Estadisticas</a></li>
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
                  <div class="row">
                    <div class="col-md-5">
                      <label>Tel&eacute;fono</label>
                    </div>
                    <div class="col-md-2">
                      <input type="text" name="caract" placeholder="Caract">
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="número" placeholder="Número">
                    </div>
                    <div class="col-md-2">
                    </div>
                  </div>
                </section>
                <section>
                  <div class="row">
                    <div class="col-md-12">
                      <h2>Datos adicionales como profesional</h2>
                      <hr>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Profesional</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" name="profesional" placeholder="Sleccione el tipo de profesional">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                    </div>
                    <div class="col-md-7">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="prof"> Quiero ofrecer mis actividades profesionales en Industria en la Web
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="prof"> Estoy buscando empleo y quiero recibir ofertas
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Educaci&oacute;n</label>
                    </div>
                    <div class="col-md-7">
                      <textarea class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Referencias</label>
                    </div>
                    <div class="col-md-7">
                      <textarea class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Experiencia Laboral</label>
                    </div>
                    <div class="col-md-7">
                      <textarea class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Objetivo Laboral</label>
                    </div>
                    <div class="col-md-7">
                      <textarea class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Comentarios Adicionales</label>
                    </div>
                    <div class="col-md-7">
                      <textarea class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                </section>
                <section>
                  <div class="row">
                    <div class="col-md-12">
                      <h2>Datos de la Empresa</h2>
                      <hr>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Nombre Fantas&iacute;a de la Empresa</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" name="name_business">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Ubicaci&oacute;n Real de la Empresa</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" name="address_business">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Ubicaci&oacute;n de la Empresa</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" name="address_business2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Facebook</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" name="facebook">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Twitter</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" name="twitter">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Web</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" name="web">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Tel&eacute;fono</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" name="telephone">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Email</label>
                    </div>
                    <div class="col-md-7">
                      <input type="text" name="email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Acerca de la Empresa</label>
                    </div>
                    <div class="col-md-7">
                      <textarea class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <label>Media</label>
                    </div>
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-xs-6 col-md-3">
                          <div class="media_file">
                            <div class="imagefile" style="margin:0;">
                              <input type="file" name="fileImage">
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                          <div class="media_file">
                            <div class="videofile">
                              <input type="file" name="fileVideo">
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                          <p>Seleccione el elemento que desea incorporar para representar su empresa en nuestro portal.</p>
                        </div>
                        <div class="col-md-6">
                        </div>
                      </div>
                      
                      
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                    </div>
                    <div class="col-md-7">
                      <button type="submit" class="btn btn-default">ACTUALIZAR MI PERFIL</button>              
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