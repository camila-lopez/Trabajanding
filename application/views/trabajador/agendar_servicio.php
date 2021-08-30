
<?php
/**
 * Este archivo muestra el agendamiento del servicio.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>
 <?php
 /**
  * se carga el header
  */
  ?>
<?php include_once "header-Tinc.php"; ?>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css'><link rel="stylesheet" href="css/se.css">



<!-- partial:index.partial.html -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
      <br>
      <?php
      /**
       * titulo de la pagina
       */
       ?>
      <h1 style="color:white">Agendar servicio</h1>
      <p>Confirma el agendamiento del servicio que nuestro cliente necesita.</p>
      <br>

    </div>
    <div class="col-lg-4 offset-lg-3 col-md-8 offset-md-2 text-center" style="margin:auto; padding:20px;font-size:22px;border:1px solid white;border-radius:20px">
      <h2 style="color:white">Datos del servicio:</h2>
      <br>
      <?php
      /**
       * Formulario donde se cargan los datos del servicio fecha, titulo, nombre, direccion, telefono, email, detalles
       */
       ?>
      <form class="row" action="<?=base_url("trabajador/confirmar_servicio")?>"  method="POST">

          <br>
          <div class="col-lg-12 offset-lg-5 col-md-12 offset-md-4 text-center" style="margin:auto;">
            <div class="form-inline"><br>
              <label style="float:left; color:white;">Fecha:</label>
              <div class="input-group" id="">
                <input value="<?php echo $servicio->fecha?>"type="date" readonly="readonly" name="fecha" class="form-control" style="font-size:22px;background: inherit; border:none; color: white"/>
              </div>
            </div>
            <div class="form-inline"><br>
              <label style="float:left; color:white;">titulo:</label>
              <div class="input-group" id="">
                <input value="<?php echo $servicio->titulo?>" readonly="readonly" class="form-control" name="titulo" style="font-size:22px;background: inherit; border:none; color: white"/>
              </div>
            </div>
            <div class="form-inline">
              <label style="float:left; color:white;">nombre:</label>
              <div class="input-group" id="">
                <input value="<?php echo $servicio->nombre?>" readonly="readonly" class="form-control" name="nombre" style="font-size:22px;background: inherit; border:none; color: white"/>
              </div>
            </div>
            <div class="form-inline">
              <label style="float:left; color:white;">dirección:</label>
              <div class="input-group" id="">
                <input value="<?php echo $servicio->direccion?>" readonly="readonly" class="form-control" name="direccion" style="font-size:22px;background: inherit; border:none; color: white"/>
              </div>
            </div>
            <div class="form-inline">
              <label style="float:left; color:white;">telefono:</label>
              <div class="input-group" id="">
                <input value="<?php echo $servicio->telefono?>" readonly="readonly" class="form-control" name="telefono" style="font-size:22px;background: inherit; border:none; color: white"/>
              </div>
            </div>
            <div class="form-inline">
              <label style="float:left; color:white;">email:</label>
              <div class="input-group" id="">
                <input value="<?php echo $servicio->email?>" readonly="readonly" class="form-control" name="email" style="font-size:22px;background: inherit; border:none; color: white"/>
              </div>
            </div>
            <div class="form-inline">
              <label style="float:left; color:white;">Detalles: </label>
              <div class="input-group" id="">
                <input value="<?php echo $servicio->detalles?>" readonly="readonly" class="form-control" name="detalles" rows="5"  style="font-size:22px;background: inherit; border:none; color: white">
              </div>
            </div>
            <?php
            /**
             * Div donde se ingresa el total a pagar del trabajo
             */
             ?>
            <div class="form-inline">
              <label style="float:left; color:white;">Ingresa Total:  </label>
              <div class="input-group" id="">
                <input class="form-control" type="number" name="total" style="margin-left: 10px" placeholder="Total a pagar" required/>
              </div>
            </div>
            <div class="form-inline">
              <div class="input-group" id="">
                <input type="hidden" value="<?php echo $servicio->id_cliente?>" readonly="readonly" class="form-control" name="id_cliente" style="font-size:22px;background: inherit; border:none; color: white"/>
              </div>
            </div>
            <div class="form-inline">
              <div class="input-group" id="">
                <input type="hidden" value="<?php echo $servicio->oficio?>" readonly="readonly" class="form-control" name="oficio" style="font-size:22px;background: inherit; border:none; color: white"/>
              </div>
            </div>
            <div class="form-inline">
              <div class="input-group" id="">
                <input type="hidden" value="<?php echo $servicio->id?>" readonly="readonly" class="form-control" name="id" style="font-size:22px;background: inherit; border:none; color: white"/>
              </div>
            </div>
            <br><br>
            <?php
            /**
             * boton de agendamiento del servicio
             */
             ?>
            <button class=" btn btn-danger"   style="margin:auto" type="submit" name="agendar">Confirmar agendamiento</button>

        </form>
      </div>
    </div>
  </div>
</div>



<?php
/**
 * script requeridos para la pagina
 */
 ?>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/eonasdan-bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js'></script><script  src="JS/st.js"></script>
<?php
/**
 * se incluye el footer
 */
 ?>
<?php include_once "footer.php"; ?>
