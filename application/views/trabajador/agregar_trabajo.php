<?php
/**
 * Este archivo muestra el agregar trabajo del usuario trabajador a su perfil.
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
    <div class="container">
      <div class="row">

        <div id="fornlogin" class="col-md-10 mb-3 text-center">
          <?php
          /**
           * titulo de la pagina
           */
           ?>
          <br>
          <h1>Añadir trabajo</h1>
          <p>Mientras más trabajos subas a tu perfil tendras más chances de que te contraten.</p>
          <br>
          <div class="col-md-8 col-sm-8 col-xs-12  slideanim" style="margin:auto;">
            <?php
            /**
             * Formulario para agregar trabajo al perfil
             */
             ?>
            <form class="row" action="<?=base_url("trabajador/agregar_trabajo")?>" method="POST">
            <div class="row">
              <?php
              /**
               * Div para agregar titulo
               */
               ?>
              <div class="col-sm-12 form-group">
                <label style="float:left; color:white;">Título:</label>
                <input type="text" class="form-control" id="comments" name="titulo" placeholder="Ej: destape cañería." rows="3" required><br>
              </div>
              <?php
              /**
               * Div para agregar descripcion del trabajo
               */
               ?>
              <div class="col-sm-12 form-group">
                <label style="float:left; color:white;">Breve descripción de trabajo realizado:</label>
                <textarea class="form-control" id="comments" name="detalles" placeholder="Ej: destapado de cañería en lava manos." rows="3" required></textarea><br>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 form-group">
                <?php
                /**
                 * boton para enviar formulario
                 */
                 ?>
                <button class="btn btn-danger" type="submit">Enviar</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
    /**
     * se incluye footer
     */
     ?>
<?php include_once "footer.php"; ?>
