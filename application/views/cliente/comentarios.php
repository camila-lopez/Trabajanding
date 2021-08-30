<?php include_once "header-inc.php"; ?>
<?php
/**
 * Este archivo muestra el formulario para crear un comentario y calificacion en el usuario CLIENTE.
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
          <br>
          <h1>Escribe tu comentario</h1>
          <p>Evalua a nuestros trabajadores, será útil para los demás.</p>
          <br>
          <?php
          /**
           * Comienza el formulario para llenar comentario
           */
           ?>
          <form class="row" action="<?=base_url("cliente/save_comentario")?>"  method="POST">
            <div class="col-md-8 col-sm-8 col-xs-12  slideanim" style="margin:auto;">
              <div class="row">
                <?php
                /**
                 * Div para ingresar nombre
                 */
                 ?>
                <div class="col-sm-6 form-group">
                  <label style="float:left; color:white;">Nombre:</label>
                  <input class="form-control" id="name" name="nombre" placeholder="Ingresa nombre" type="text" required>
                </div>
                <?php
                /**
                 * Div para ingresar apellido
                 */
                 ?>
                <div class="col-sm-6 form-group">
                  <label style="float:left; color:white;">Apellido:</label>
                  <input class="form-control" id="lastname" name="apellido" placeholder="Ingresa apellido" type="text" required>
                </div>
                <?php
                /**
                 * Div para ingresar evaluacion numero de 1 a 5
                 */
                 ?>
                <div class="col-sm-12 form-group">
                  <label style="float:left; color:white;">Evaluación:</label>
                  <input class="form-control" id="" name="nota" placeholder="SOLO NUMEROS ENTRE 1 Y 5." type="number" required>
                </div>
                <?php
                /**
                 * Div para dejar comentario
                 */
                 ?>
                <div class="col-sm-12 form-group">
                  <label style="float:left; color:white;">Comentario:</label>
                  <textarea class="form-control" id="contenido" name="contenido" placeholder="Deja tu comentario del servicio" rows="5" required></textarea><br>
                </div>
                <div class="col-sm-12 form-group">
                    <input type="hidden" value="<?php echo $serv->id_trabajador?>" readonly="readonly" class="form-control" name="id_trabajador" />
                </div>
              </div>
              <div class="row">
                <?php
                /**
                 * Div para boton de enviar
                 */
                 ?>
                <div class="col-sm-12 form-group">
                  <button class="btn btn-danger" type="submit">Enviar</button>
                </div>
              </div>
            </div>
        </form>
        </div>
      </div>
    </div>
    <?php
    /**
     * se incluye el footer como el header
     */
     ?>
<?php include_once "footer.php"; ?>
