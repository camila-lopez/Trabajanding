<?php
/**
 * Este archivo muestra la lista de servicio realizados y por realizar del usuario trabajador a su perfil.
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
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 mb-3 text-center">
      <br>
      <div class="container-fluid">
        <div class="row">
          <div id="forncenter" class="col-md-12">
            <div class="container-fluid">
              <div class="row">
                <div id="fornlogin" class="col-md-7 col-sm-6 col-xs-12">
                  <?php
                  /**
                   * titulo de la pagina
                   */
                   ?>
                    <h3>Mis Servicios</h3>
                    <br>
                    <?php
                    /**
                     * tabla con datos de servicio fecha, cliente, direccion, titulo y accion
                     */
                     ?>
                    <table  id="card-table" class=" col-md-12 col-sm-12 col-xs-12 table" style="color:white">
                      <thead class=" col-md-12 col-sm-12 col-xs-12">
                      <tr class=" col-md-12 col-sm-12 col-xs-12">
                         <th class=" " width="20%">Fecha</th>
                         <th class=" " width="20%">Cliente</th>
                         <th class=" " width="30%">Dirección</th>
                         <th class=" " width="20%">Título</th>
                         <th class=" " width="10%">Acción</th>
                      </tr>
                     </thead>
                     <tbody>
                       <?php
                       /**
                        * tabla con datos obtenidos de la base de datos
                        */
                        ?>
                       <tbody>
                         <tr>
                         <?php foreach($servicios as $dato){
                           echo "<td>".$dato->fecha."</td>";
                           echo "<td>".$dato->nombre."</td>";
                           echo "<td>".$dato->direccion."</td>";
                           echo "<td>".$dato->titulo."</td>";
                           ?>
                          <td>
                            <a href="<?=base_url('trabajador/mis-servicios/'.$dato->id); ?>" style="color:#EC634E;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                          </td>
                        </tr>
                      <?php  } ?>
                     </tbody>
                    </table>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                  <?php
                  /**
                   * titulo de la pagina
                   */
                   ?>
                  <h3>Agenda Mensual</h3>
                  <br>
                  <br>
                    <div id="forncenter" class="col-md-10 mb-3">
                      <?php
                      foreach($activos as $dato){ ?>
                        <?php
                        /**
                         * div con titulo, cliente, fecha, direccion y total obtenido de la base de datos
                         */
                         ?>
                      <div id="fornlogin" class="col-md-12 col-sm-12 col-xs-12" style="text-align: left;margin-bottom:10px;padding:15px"> <?php
                      echo "<h6>Titulo: ".$dato->titulo."</h6>";
                      echo "<h6>Cliente: ".$dato->nombre."</h6>";
                      echo "<h6>Fecha: ".$dato->fecha."</h6>";
                      echo "<h6>Dirección: ".$dato->direccion."</h6>";
                      echo "<h6>Total: ".$dato->total."</h6>";?>
                      <?php
                      /**
                       * boton de terminar servicio
                       */
                       ?>
                      <a class="btn btn-danger btn-block col-md-4 text-center" style="color:white" href="<?=base_url('trabajador/finalizar/'.$dato->id); ?>" style="color:#EC634E;">Terminar</a>

                        </div>  <?php
                    }
                      ?>
                    </div>
                    <br>
                  </div>
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
 * css necesario para la responsividad
 */
 ?>
<style media="screen">
@media only screen and (min-width : 320px) and (max-width : 415px) {
  #card-table{
    margin-left:-25px;
  }
}

</style>
<?php
/**
 * se carga el footer
 */
 ?>
<?php include_once "footer.php"; ?>
