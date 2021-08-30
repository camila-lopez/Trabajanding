<?php include_once "header-inc.php"; ?>

<?php
/**
 * Este archivo muestra el perfil del usuario CLIENTE.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12 mb-3 text-center">
      <br>
      <div class="container">
        <div class="row">
          <div id="forncenter" class="col-md-12">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <?php
                      /**
                       * Link donde se carga icono de lapiz para editar perfil
                       */
                       ?>
                      <a id="pe" href="#" onclick="desaparecer()">
                        <svg class="bi d-block mx-auto mb-1" width="20" height="20"><use xlink:href="#pen"/></svg>
                      </a>
                      <?php
                      /**
                       * Div donde se carga el nombre de usuario (cliente)
                       */
                       ?>
                      <h6 id="per">Bienvenido,</h6>
                      <h3 id="per"><?php echo $info->nombre."  ".$info->apellido_paterno?></h3>
                    </div>
                  </div>
                  <br>
                  <div id="perfil">
                    <div id="fornlogin" class="col-md-12 col-sm-12 col-xs-12">
                      <br>
                      <h6>Datos personales</h6>
                      <br>
                      <?php
                      /**
                       * tabla con los datos personales del cliente
                       */
                       ?>
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <td>Télefono</td>
                            <td><?php echo $info->telefono?></td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td><?php echo $info->email?></td>
                          </tr>
                          <tr>
                            <td>Dirección</td>
                            <td><?php echo $info->direccion?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="editar" style="display:none">
                    <div id="fornlogin" class="col-md-12 col-sm-12 col-xs-12">
                      <br>
                      <?php
                      /**
                       * seccion en display:none para editar datos
                       */
                       ?>
                      <h6>Editar mis datos</h6>
                      <br>
                      <?php
                      /**
                       * Formulario para editar los datos personales
                       */
                       ?>
                      <form class="form-group" action="<?=base_url("cliente/update_user")?>" method="POST">
                        <?php
                        /**
                         * Div para ingresar telefono
                         */
                         ?>
                        <div class="form-group">
                          <label style="float:left; color:white;">Ingresa télefono:</label>
                          <div class="input-group" id="">
                            <input value="<?php echo $info->telefono?>" name="telefono" type="number" class="form-control" placeholder="télefono"/>
                          </div>
                        </div>
                        <?php
                        /**
                         * Div para ingresar mail
                         */
                         ?>
                        <div class="form-group">
                          <label style="float:left; color:white;">Ingresa email:</label>
                          <div class="input-group" id="">
                            <input value="<?php echo $info->email?>" name="email" type="email" class="form-control" placeholder="email"/>
                          </div>
                        </div>
                        <?php
                        /**
                         * Div para ingresar direccion
                         */
                         ?>
                        <div class="form-group">
                          <label style="float:left; color:white;">Ingresa dirección:</label>
                          <div class="input-group" id="">
                            <input value="<?php echo $info->direccion?>" name="direccion" type="text"  class="form-control" placeholder="dirección"/>
                          </div>
                          <br>
                        </div>
                        <?php
                        /**
                         * Div con botones de cancelar y Actualizar
                         */
                         ?>
                        <div class="form-group" style="margin:auto">
                          <button type="button" class="btn btn-danger p-2" name="button" onclick="desaparecer()">Cancelar</button>
                          <button type="submit" class="btn btn-success p-2" name="button">Actualizar</button>
                        </div>
                        <br>
                      </form>
                    </div>
                  </div>
                  <br>
                  <div class="container">
                    <div class="row">
                      <?php
                      /**
                       * Div con boton de cerrar sesion
                       */
                       ?>
                      <div class="col-md-6 col-sm-6 col-xs-6" style="margin:auto;">
                        <a class="btn btn-danger col-md-12 col-sm-12 col-xs-12" href="<?=base_url("users/logout")?>">Cerrar sesión</a>
                      </div>
                    </div>

                  </div>

                  <br>
                  <br>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="row">
                    <?php
                    /**
                     * Div donde se muestras las publicaicones solicitando trabajador
                     */
                     ?>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <h3>Mis Publicaciones</h3>
                      </div>
                    </div>
                    <div id="btn" class="col-md-12 col-sm-12 col-xs-12">
                      <?php
                      /**
                       * Div con datos de las publicaciones con titulo, detalles, fecha, direccion y telefono
                       */
                       ?>
                      <div id="forncenter" class="col-md-12 mb-3">
                        <?php
                        foreach($aviso as $dato){ ?>
                        <div id="fornlogin" class="col-md-12 col-sm-12 col-xs-12" style="text-align: left;margin-bottom:10px;padding:15px"> <?php
                        echo "<h6>titulo: ".$dato->titulo."</h6>";
                        echo "<h6>detalles: ".$dato->detalles."</h6>";
                        echo "<h6>fecha: ".$dato->fecha."</h6>";
                        echo "<h6>direccion: ".$dato->direccion."</h6>";
                        echo "<h6>telefono: ".$dato->telefono."</h6>";
                          ?></div>  <?php
                      }
                        ?>
                      </div>
                    </div>
                    <?php
                    /**
                     * Div con boton de crear publicacion
                     */
                     ?>
                    <div class="col-md-6 col-sm-6 col-xs-6" style="margin:auto;">
                      <a class="btn btn-danger col-md-12 col-sm-12 col-xs-12" href="<?=base_url("cliente/agendar")?>">Crear publicacion</a>
                    </div>
                  </div>
                  <br>
                  <br>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
    </div>
  </div>
</div>
<br>

<?php
/**
 * estilo de css para la pagina
 */
 ?>
<style>
  #per{
    text-align:left;
  }
  #pe{
    float: right;
    color:#F99B43;
  }
  table{
    text-align:left;
  }
  td{
    color:white;
  }
</style>
<?php
/**
 * script para hacer desaparecer (display:none) el div de 'editar perfil' y 'datos personales'
 */
 ?>
<script type="text/javascript">
function desaparecer() {
  var x = document.getElementById("perfil");
  var y = document.getElementById("editar");
  if (x.style.display == "none"){
  x.style.display = "block";
  y.style.display = "none";

  }
  else {
    x.style.display = "none";
    y.style.display = "block";
  }
}
</script>
<?php
/**
 * se incluye el footer y el header
 */
 ?>
<?php include_once "footer.php"; ?>
