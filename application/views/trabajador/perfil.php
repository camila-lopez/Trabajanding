<?php
/**
 * Este archivo muestra el perfil del usuario trabajador.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>

 <?php
 /**
  * se incluye el header
  */
  ?>
<?php include_once "header-Tinc.php"; ?>
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
                       * Div donde se carga el nombre de usuario (trabajador)
                       */
                       ?>
                      <h6 id="per">Bienvenido,</h6>
                      <h3 id="per"><?php echo $info->nombre."  ".$info->apellido_paterno?></h3>
                      <hr>
                    </div>
                    <?php
                    /**
                     * Div donde se carga la nota del trabajador
                     */
                     ?>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <h6> <i class="fa fa-star" style="color:#FEFCBA;"></i> <?php echo round($nota, 1)?></h6>
                    </div>
                    <?php
                    /**
                     * Div donde se cargan los comentarios del trabajador
                     */
                     ?>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <a href="#" style="color:white;" onclick="comentarios()"><i class="fa fa-comment" style="color:#FEFCBA;"></i> <?php echo $coment?> comentarios</a>
                    </div>
                    <?php $of =$info->oficio;
                    if($of==1)
                    $of="Gásfiter";
                    if($of==2)
                    $of="Electricista";
                    if($of==3)
                    $of="Cerrajero";
                    ?>
                  </div>
                  <hr>
                  <br>
                  <div id="perfil">
                    <div id="fornlogin" class="col-md-12 col-sm-12 col-xs-12">
                      <br>
                      <h6>Datos personales</h6>
                      <br>
                      <?php
                      /**
                       * tabla con los datos personales del trabajador
                       */
                       ?>
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <td>Oficio</td>
                            <td><?php echo $of?></td>
                          </tr>
                          <tr>
                            <td>Teléfono</td>
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
                      <br>
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
                      <form class="form-group" action="<?=base_url("trabajador/update_user")?>" method="POST">
                        <?php
                        /**
                         * Div para ingresar telefono
                         */
                         ?>
                        <div class="form-group">
                          <label style="float:left; color:white;">Ingresa télefono:</label>
                          <div class="input-group" id="">
                            <input value="<?php echo $info->telefono?>" name="telefono" class="form-control" placeholder="télefono"/>
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
                            <input value="<?php echo $info->email?>" name="email" class="form-control" placeholder="email"/>
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
                            <input value="<?php echo $info->direccion?>" name="direccion" class="form-control" placeholder="dirección"/>
                          </div>
                          <br>
                        </div>
                        <?php
                        /**
                         * Divcon botones para cancelar y actualizar
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
                      <div class="col-md-6 col-sm-6 col-xs-6" style="margin:auto;">
                        <a class="btn btn-danger col-md-12 col-sm-12 col-xs-12" href="<?=base_url("users/logout")?>">Cerrar sesión</a>
                      </div>
                    </div>

                  </div>

                  <br>
                  <br>
                </div>

                <div id="div" class="col-md-6 col-sm-6 col-xs-12">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <?php
                      /**
                       * Div con trabajos realizados por el trabajador
                       */
                       ?>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <h3>Trabajos realizados</h3>
                        <br>
                      </div>
                    </div>
                    <div id="btn" class="col-md-12 col-sm-12 col-xs-12">

                      <div id="forncenter" class="col-md-12 mb-3">
                        <?php
                        foreach($trabajo as $dato){ ?>
                          <?php
                          /**
                           * Div donde se carga el trabajo realizado con titulo y detalles
                           */
                           ?>
                        <div id="fornlogin" class="col-md-12 col-sm-12 col-xs-12" style="text-align: left;margin-bottom:10px;padding:15px"> <?php
                        echo "<h6>titulo: ".$dato->titulo."</h6>";
                        echo "<h6>detalles: ".$dato->detalles."</h6>";
                          ?></div>  <?php
                      }
                        ?>
                      </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12" style="margin:auto;">
                      <?php
                      /**
                       * boton para agregar nuevo trabajo al perfil
                       */
                       ?>
                      <a class="btn btn-danger col-md-12 col-sm-12 col-xs-12" href="<?=base_url("trabajador/nuevo_trabajo")?>">Agregar trabajo</a>
                    </div>
                  </div>
                  <br>
                  <br>

                </div>
                <?php
                /**
                 * Div en display:none para mostrar los comentarios hechos hacia el trabajador
                 */
                 ?>
                <div id="comentario" class="col-md-6 col-sm-6 col-xs-12" style="display:none">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                          <div class="col-md-4 col-sm-3 col-xs-12">
                            <a href="#" style="float:left;" onclick="comentarios()"> <i class="fa fa-times-circle" style="color:#F99B43;"></i> </a>
                          </div>
                          <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                            <h3>Comentarios</h3>
                            <div class="col-md-4 col-sm-13 col-xs-12 text-center">
                            </div>
                          </div>
                        </div>

                        <br>
                      </div>
                    </div>
                    <div id="btn" class="col-md-12 col-sm-12 col-xs-12">

                      <div id="forncenter" class="col-md-12 mb-3">
                        <?php
                        foreach($comentario as $dato){ ?>
                          <?php
                          /**
                           * Div para mostrar los comentarios almacenados en la base de datos
                           */
                           ?>
                        <div id="fornlogin" class="col-md-12 col-sm-12 col-xs-12" style="text-align: left;margin-bottom:10px;padding:15px"> <?php
                        echo "<h6 style='font-style: italic; text-align:center'> ".$dato->contenido."</h6>";
                        echo "<h6>Nota: ".$dato->nota."</h6>";
                        echo "<h6>Cliente: ".$dato->nombre."  ".$dato->apellido."</h6>";
                          ?></div>  <?php
                      }
                        ?>
                      </div>
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
 * css necesario para la pagina
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
  #img{
    width:100px;
    height:100px;
  }
</style>
<?php
/**
 * script para hacer desaparecer y aparecer los div (display:none)
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
function comentarios() {
  var div = document.getElementById("div");
  var com = document.getElementById("comentario");
  if (div.style.display == "none"){
  div.style.display = "block";
  com.style.display = "none";

  }
  else {
    div.style.display = "none";
    com.style.display = "block";
  }
}
</script>
<?php
/**
 * se incluye el footer
 */
 ?>
<?php include_once "footer.php"; ?>
