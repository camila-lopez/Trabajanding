<?php
/**
 * Este archivo muestra el login de la app web.
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
<?php include_once "header-log.php"; ?>
    <br>
    <div class="container">
      <div class="row">
        <?php
        /**
         * div que carga la imagen del logo principal
         */
         ?>
        <div id="forncenter" class="col-md-5 mb-3">
          <img id="log" src="assets/image/marca.png" alt="">
        </div>
        <div id="fornlogin" class="col-md-8 mb-3 text-center">
          <br>
          <div class="container">
            <div class="row">
              <div id="forncenter" class="col-md-10">
                <?php
                /**
                 * formulario para iniciar sesion con rut y contraseña
                 */
                 ?>
                <form class="row" action="<?=base_url("users/login")?>" method="POST">
                  <input class="rutlog col-md-12 mb-3 text-center" id="rut" type="text" name="rut" value="" placeholder="Ingrese Rut">
                  <input class="conlog col-md-12 mb-3 text-center" id="clave" type="password" name="clave" value="" placeholder="Ingrese Contraseña">
                  <br>
                  <div id="forncenter" class="col-md-6">
                    <br>
                    <button class="btn btn-danger col-md-12 mb-3" type="submit" name="guardar">Ingresar</button>
                  </div>
                  </form>
              </div>
            </div>
          </div>
          <hr>
          <?php
          /**
           * link con redirecciona  registrarse
           */
           ?>
          <h6>¿No tienes una cuenta? <a id="tag" href="<?php echo base_url(); ?>registro">REGISTRATE</a></h6>
          <br>

        </div>
      </div>
    </div>
    <?php
    /**
     * se incluye el footer
     */
     ?>
<?php include_once "footer.php"; ?>
