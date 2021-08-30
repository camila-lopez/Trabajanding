<?php
/**
 * Este archivo muestra el formulario para contactarse con nosotros.
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
          <h1>¡Contactanos!</h1>
          <p>Si tienes alguna duda no dudes en hablarnos.</p>
          <br>
          <div class="col-md-8 col-sm-8 col-xs-12  slideanim" style="margin:auto;">
            <?php
            /**
             * Formulario de contacto
             */
             ?>
            <form class="row" action="<?=base_url("trabajador/home")?>"  method="POST">
              <div class="row">
                <?php
                /**
                 * Div para agregar nombre
                 */
                 ?>
                <div class="col-sm-6 form-group">
                  <label style="float:left; color:white;">Nombre:</label>
                  <input class="form-control" id="name" name="name" placeholder="Ingresa nombre" type="text" required>
                </div>
                <?php
                /**
                 * Div para agregar email
                 */
                 ?>
                <div class="col-sm-6 form-group">
                  <label style="float:left; color:white;">Email:</label>
                  <input class="form-control" id="email" name="email" placeholder="Ingresa email" type="email" required>
                </div>
                <?php
                /**
                 * Div para agregar asunto
                 */
                 ?>
                <div class="col-sm-12 form-group">
                  <label style="float:left; color:white;">Asunto:</label>
                  <input class="form-control" id="" name="asunto" placeholder="Ingresa asunto" type="" required>
                </div>
                <?php
                /**
                 * Div para agregar comentario
                 */
                 ?>
                <div class="col-sm-12 form-group">
                  <label style="float:left; color:white;">Comentario:</label>
                  <textarea class="form-control" id="comments" name="comentario" placeholder="Ingresa comentario" rows="5"></textarea><br>
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
     * se incluye el footer
     */
     ?>
<?php include_once "footer.php"; ?>
