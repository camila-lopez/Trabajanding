<?php include_once "header-inc.php"; ?>
<?php
/**
 * Este archivo muestra el formulario de contacto para hablar con nosotros en caso de cualquier duda.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>
    <br>
    <div class="container">
      <div class="row">
        <?php
        /**
         * Div del titulo
         */
         ?>
        <div id="fornlogin" class="col-md-10 mb-3 text-center">
          <h1>¡Contactanos!</h1>
          <p>Si tienes alguna duda no dudes en hablarnos.</p>
          <br>
          <?php
          /**
           * Div para llenar formulario de contacto
           */
           ?>
          <div class="col-md-8 col-sm-8 col-xs-12  slideanim" style="margin:auto;">
            <form class="row" action="<?=base_url("cliente/home")?>"  method="POST">
              <div class="row">
                <?php
                /**
                 * Div para escribir nombre
                 */
                 ?>
                <div class="col-sm-6 form-group">
                  <label style="float:left; color:white;">Nombre:</label>
                  <input class="form-control" id="name" name="name" placeholder="Ingresa nombre" type="text" required>
                </div>
                <?php
                /**
                 * Div para ingresar mail
                 */
                 ?>
                <div class="col-sm-6 form-group">
                  <label style="float:left; color:white;">Email:</label>
                  <input class="form-control" id="email" name="email" placeholder="Ingresa email" type="email" required>
                </div>
                <?php
                /**
                 * Div para ingresar asunto
                 */
                 ?>
                <div class="col-sm-12 form-group">
                  <label style="float:left; color:white;">Asunto:</label>
                  <input class="form-control" id="" name="asunto" placeholder="Ingresa asunto" type="" required>
                </div>
                <?php
                /**
                 * Div para ingresar comentario
                 */
                 ?>
                <div class="col-sm-12 form-group">
                  <label style="float:left; color:white;">Comentario:</label>
                  <textarea class="form-control" id="comments" name="comentario" placeholder="Ingresa comentario" rows="5"></textarea><br>
                </div>
              </div>
              <div class="row">
                <?php
                /**
                 * Div para el boton de enviar
                 */
                 ?>
                <div class="col-sm-12 form-group">
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
     * se incluye el footer y el header
     */
     ?>
<?php include_once "footer.php"; ?>
