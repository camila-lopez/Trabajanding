<?php
/**
 * Este archivo muestra el inicio del usuario trabajador.
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
    <div id="fornlogin" class="col-md-12 mb-3 text-center">
      <br>
      <div class="container">
        <div class="row">
          <div id="forncenter" class="col-md-10">

            <?php $user = $this->session->userdata()?>
            <?php
            /**
             * div que carga titulo principal con nombre del trbajador
             */
             ?>
            <div id="welcome" class="col-md-12 col-sm-12 col-xs-12">
              <h2 class="text-center" style="color:white">Bienvenido/a: <?php echo $user["nombre"];?></h2>
              <br>
            </div>
            <div class="container">
              <div class="row">
                <br>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <?php
                  /**
                   * titulo de la pagina
                   */
                   ?>
                  <h3>Avisos que te pueden interesar</h3>
                  <br>
                  <?php
                  foreach($avisos as $dato){ ?>
                    <?php
                    /**
                     * Div con datos de servicio por hacer con titulo, detalle, fecha, nombre, direccion y telefono
                     */
                     ?>
                  <div id="forn" class="col-md-8 col-sm-8 col-xs-12" style="text-align:left;margin-bottom:30px;padding-top:20px;color:white"> <?php
                    echo "<h5>titulo: ".$dato->titulo."</h5>";
                    echo "<h5>detalles: ".$dato->detalles."</h5>";
                    echo "<h5>fecha: ".$dato->fecha."</h5>";
                    echo "<h5>nombre: ".$dato->nombre."</h5>";
                    echo "<h5>direccion: ".$dato->direccion."</h5>";
                    echo "<h5>telefono: ".$dato->telefono."</h5>";
                      ?>
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <?php
                      /**
                       * boton de yo lo hago
                       */
                       ?>
                      <a class="btn btn-danger mb-3" style="margin:auto" href="<?=base_url('trabajador/agendar_servicio/'.$dato->id); ?>">Yo lo hago!</a>
                    </div>
                  </div>
                    <?php  }?>
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
 * se incluye el footer
 */
 ?>
<?php include_once "footer.php"; ?>
