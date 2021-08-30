<?php include_once "header-inc.php"; ?>

<?php
/**
 * Este archivo muestra el listado de pagos realizados hacia algun trabajador.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>
    <br>
    <div class="container">
      <div class="row">

        <div id="fornlogin" class="col-md-10 mb-3 text-center">
          <?php
          /**
           * titulo de la pagina
           */
           ?>
          <h1>Mis pagos</h1>
          <br>
          <?php
          /**
           * Tabla donde se carga los pagos junto con fecha, trabajador, servicio y pago
           */
           ?>
          <table class="table" style="color:white">
    <thead>
      <tr>
        <th>Fecha</th>
        <th>Trabajador</th>
        <th>Servicio</th>
        <th>Pago</th>
      </tr>
    </thead>
    <?php
    /**
     * tabla donde se obtienen los datos de la base de datos
     */
     ?>
    <tbody>
      <tr>
        <?php foreach($servicios as $dato){
          echo "<td>".$dato->fecha."</td>";
          echo "<td>".$dato->nombre."  ".$dato->apellido_paterno."</td>";
          echo "<td>".$dato->titulo."</td>";
          echo "<td>".$dato->total."</td>";
          ?>
      </tr>
      <?php  } ?>
    </tbody>
  </table>
  <br>
  <hr>
  <p style="color:#94AEB9;">Fin de la lista mis pagos</p>
        </div>
      </div>
    </div>
    <?php
    /**
     * se incluye el footer y el header
     */
     ?>
<?php include_once "footer.php"; ?>
