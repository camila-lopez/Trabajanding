<?php
/**
 * Este archivo muestra las ganacias del usuario trabajador.
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
          <h1>Mis ganancias</h1>
          <br>
          <?php
          /**
           * tabla con datos de ganancia fecha, cliente, servicio y pago
           */
           ?>
          <table class="table" style="color:white">
    <thead>
      <tr>
        <th>Fecha</th>
        <th>Cliente</th>
        <th>Servicio</th>
        <th>Pago</th>
      </tr>
    </thead>
    <?php
    /**
     * tabla con datos almacenados en la base de datos
     */
     ?>
    <tbody>
      <tr>
        <?php foreach($servicios as $dato){
          echo "<td>".$dato->fecha."</td>";
          echo "<td>".$dato->nombre."</td>";
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
     * se incluye el footer
     */
     ?>
<?php include_once "footer.php"; ?>
