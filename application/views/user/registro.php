<?php
/**
 * Este archivo muestra el formulario para registrarse en la app web.
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
    <div id="containerCenter" class="container text-center">
      <?php
      /**
       * titulo de la pagina
       */
       ?>
      <h1>REGISTRARSE</h1>
      <p>Es rápido y fácil.</p>
      <div id="forn" class="col-md-6 mb-3">
        <br>
        <div class="row">
          <div id="forncenter" class="col-md-10 text-center">
            <h6>Ingresa tus datos:</h6>
            <?php
            /**
             * formulario de registro en la app web donde se ingresa nombre, apellidos, rut, clave, telefono, email y direccion
             */
             ?>
            <form class="row" action="<?=base_url("users/save")?>" method="POST">
              <input class="col-md-6 mb-3 text-center" id="nombre" type="text" name="nombre" value="" placeholder="Nombre" required>
              <input class="col-md-6 mb-3 text-center" id="apellido_paterno" type="text" name="apellido_paterno" value="" placeholder="Apellido paterno" required>
              <input class="col-md-6 mb-3 text-center" id="apellido_materno" type="text" name="apellido_materno" value="" placeholder="Apellido materno" required>
              <input class="col-md-6 mb-3 text-center" id="rut" type="text" name="rut" value="" placeholder="Rut" required>
              <input class="col-md-6 mb-3 text-center" id="clave" class="text" type="text" name="clave" value="" placeholder="Contraseña" required>
              <input class="col-md-6 mb-3 text-center" id="telefono" class="text" type="number" name="telefono" value="" placeholder="Telefono" required>
              <input class="col-md-12 mb-3 text-center" id="email" class="text" type="email" name="email" value="" placeholder="Email" required>
              <input class="col-md-12 mb-3 text-center" id="direccion" class="text" type="text" name="direccion" value="" placeholder="Dirección" required>
              <div id="tipouser" class="col-md-12">

              <h6>Elige el tipo de usuario (*)</h6>
              <?php
              /**
               * select para seleccionar si es trabajador o Cliente
               */
               ?>
                <select class="col-md-12 mb-3 text-center" id="tipo" name="tipo" required>
                  <option value="">Elige un tipo de cliente</option>
                  <option value="1">Cliente</option>
                  <option value="2">Trabajador</option>
                </select>
              </div>

              <div id="oficio" class="col-md-12">

              <h6>Eli<?php
              /**
               * div con un select de oficios gasfiter, electricista o cerrajero
               */
               ?>ge tu oficio (Sólo si eres trabajador)</h6>
                <select class="col-md-12 mb-3 text-center" id="select" name="oficio">
                  <option value="">Elige un oficio</option>
                  <option value="1">Gasfiter</option>
                  <option value="2">Electricista</option>
                  <option value="3">Cerrajero</option>
                </select>
              </div>
              <br>
              <br>
              <div id="fornbutton" class="col-md-10">
              <br>
                <button class=" btn btn-danger col-md-12 mb-3"id="guardar" type="submit" name="guardar">Registrarse</button>
              </div>
              <br>
            </form>
          </div>
        </div>
        <br>
      </div>
    </div>
    <br><br>
    <?php
    /**
     * se incluye el footer
     */
     ?>
<?php include_once "footer.php"; ?>
