<?php
/**
 * Este archivo muestra la finalizacion del trabajo por parte del usuario trabajador.
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
        <div id="fornlogin" class="col-md-8 mb-3 text-center">
          <br>
          <?php
          /**
           * titulo de la pagina
           */
           ?>
          <h1>Terminar servicio</h1>
          <p>Confirma que el servicio ya fue realizado y pagado.</p>
          <br>
          <?php
          /**
           * formulario donde se cargan los datos del servicio realizados por el trabajador
           */
           ?>
          <form class="row" action="<?=base_url("trabajador/finalizar_servicio")?>"  method="POST">
              <br>
              <div class="col-lg-12 offset-lg-5 col-md-12 offset-md-4 text-center" style="margin:auto;">
                <h4 style="color:white;">Datos del servicio:</h4>
                <div class="form-inline"><br>
                  <label style="float:left; color:white;">Fecha:</label>
                  <div class="input-group" id="">
                    <input value="<?php echo $serv->fecha?>"type="date" readonly="readonly" name="fecha" class="form-control" style="font-size:22px;background: inherit; border:none; color: white"/>
                  </div>
                </div>
                <div class="form-inline"><br>
                  <label style="float:left; color:white;">Titulo:</label>
                  <div class="input-group" id="">
                    <input value="<?php echo $serv->titulo?>" readonly="readonly" class="form-control" name="titulo" style="font-size:22px;background: inherit; border:none; color: white"/>
                  </div>
                </div>
                <div class="form-inline">
                  <label style="float:left; color:white;">Nombre:</label>
                  <div class="input-group" id="">
                    <input value="<?php echo $serv->nombre?>" readonly="readonly" class="form-control" name="nombre" style="font-size:22px;background: inherit; border:none; color: white"/>
                  </div>
                </div>
                <div class="form-inline">
                  <label style="float:left; color:white;">Dirección:</label>
                  <div class="input-group" id="">
                    <input value="<?php echo $serv->direccion?>" readonly="readonly" class="form-control" name="direccion" style="font-size:22px;background: inherit; border:none; color: white"/>
                  </div>
                </div>
                <div class="form-inline">
                  <label style="float:left; color:white;">Telefono:</label>
                  <div class="input-group" id="">
                    <input value="<?php echo $serv->telefono?>" readonly="readonly" class="form-control" name="telefono" style="font-size:22px;background: inherit; border:none; color: white"/>
                  </div>
                </div>
                <div class="form-inline">
                  <label style="float:left; color:white;">Total: </label>
                  <div class="input-group" id="">
                    <input value="<?php echo $serv->total?>" readonly="readonly" class="form-control" name="detalles" rows="5"  style="font-size:22px;background: inherit; border:none; color: white">
                  </div>
                </div>
                <div class="form-inline">
                  <div class="input-group" id="">
                    <input type="hidden" value="<?php echo $serv->id?>" readonly="readonly" class="form-control" name="id" style="font-size:22px;background: inherit; border:none; color: white"/>
                  </div>
                </div>
                <br><br>
                <?php
                /**
                 * boton para finalizar servicio
                 */
                 ?>
                <button class=" btn btn-danger"   style="margin:auto; margin-bottom:30px" type="submit" name="agendar">Finalizar servicio</button>

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
