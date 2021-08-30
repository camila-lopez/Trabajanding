<?php include_once "header-inc.php"; ?>
<?php
/**
 * Este archivo muestra la lista de servicios que ha pedido y la agenda de servicios pendientes.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>
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
                <?php
                /**
                 * Div con la lista de servicios pedidos
                 */
                 ?>
                <div id="fornlogin" class="col-md-7 col-sm-6 col-xs-12">
                    <h3>Mis Servicios</h3>
                    <br>
                    <?php
                    /**
                     * Tabla compuesta por fecha, titulo, detalle, trabajador y accion
                     */
                     ?>
                    <table  id="card-table" class=" col-md-12 col-sm-12 col-xs-12 table" style="color:white">
                      <thead class=" col-md-12 col-sm-12 col-xs-12">
                      <tr class=" col-md-12 col-sm-12 col-xs-12">
                         <th class=" " width="20%">Fecha</th>
                         <th class=" " width="20%">Titulo</th>
                         <th class=" " width="30%">detalles</th>
                         <th class=" " width="20%">Trabajador</th>
                         <th class=" " width="10%">Acción</th>
                      </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <?php
                         /**
                          * Tabla con datos obtenidos de la base de datos de servicios pedidos
                          */
                          ?>
                       <?php foreach($servicios as $dato){
                         echo "<td>".$dato->fecha."</td>";
                         echo "<td>".$dato->titulo."</td>";
                         echo "<td>".$dato->detalles."</td>";
                         echo "<td>".$dato->nombre."  ".$dato->apellido_paterno."</td>";
                         ?>
                        <td>
                          <a href="<?=base_url('cliente/mis-servicios/'.$dato->id); ?>" style="color:#EC634E;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                      </tr>
                    <?php  } ?>
                     </tbody>
                    </table>
                </div>
                <?php
                /**
                 * Div de la agenda mensual de trabajos por realizar
                 */
                 ?>
                <div class="col-md-5 col-sm-6 col-xs-12">
                  <h3>Agenda Mensual</h3>
                  <br>
                  <br>
                    <div id="forncenter" class="col-md-8 mb-3">
                      <?php
                      /**
                       * Div donde donde muestra los datos del servicio titulo, trabajador y fecha)
                       */
                       ?>
                      <?php
                      foreach($activos as $dato){ ?>
                      <div id="fornlogin" class="col-md-12 col-sm-12 col-xs-12" style="text-align: left;margin-bottom:10px;padding:15px"> <?php
                      echo "<h6>Titulo: ".$dato->titulo."</h6>";
                      echo "<h6>Trabajador: ".$dato->nombre."  ".$dato->apellido_paterno."</h6>";
                      echo "<h6>Fecha: ".$dato->fecha."</h6>";?>
                      <?php
                      /**
                       * boton para calificar a trabajador
                       */
                       ?>
                      <a class="btn btn-danger btn-block col-md-4 text-center" style="color:white" href="<?=base_url('cliente/calificar/'.$dato->id); ?>" style="color:#EC634E;">Calificar</a>

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
      <br>
    </div>
  </div>
</div>
<br>
<?php
/**
 * estilo de css para darle responsividad a la pagina
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
 * se incluye el footer y el header
 */
 ?>
<?php include_once "footer.php"; ?>
