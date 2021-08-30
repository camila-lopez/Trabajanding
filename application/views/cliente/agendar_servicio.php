<?php include_once "header-inc.php"; ?>

<?php
/**
 * Este archivo muestra el formulario para agendar un servicio en el usuario CLIENTE.
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css'><link rel="stylesheet" href="css/se.css">




<!-- partial:index.partial.html -->
<div class="container-fluid">
  <div class="row">
    <?php
    /**
     * Div del titulo
     */
     ?>
    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
      <br>
      <h1 style="color:white">Agendar servicio</h1>
      <p>Publica el servicio que necesitas y cuando un trabajador esté disponible te contactaremos.</p>
      <p>Puedes revisar tus publicaciones de servicios en tu perfil</p>
      <br>
    </div>
    <?php
    /**
     * Div con el form para agendar servicio
     */
     ?>
    <div class="col-md-12 col-sm-12 col-xs-12" style="margin:auto">
      <form class="row" action="<?=base_url("cliente/agendar_servicio")?>" method="POST">
        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2" >
          <?php
          /**
           * Div seleccionando fecha
           */
           ?>
          <div class="content" style="background-color:white;padding:20px;border-radius:10px">
            <div class="form-group">
              <label>Selecciona mes, día y año</label>
              <div class="input-group date" id="datepicker">
                <input type="date" name="fecha" class="form-control" placeholder="MM/DD/YYYY" required/>
              </div>
            </div>
            <?php
            /**
             * Div seleccinando oficio
             */
             ?>
            <div class="form-group">
              <label>Selecciona tipo de oficio</label>
              <div class="input-group date" id="timepicker">
                <select class="col-md-12 mb-3 text-center" style="border: 1px solid lightgrey" name="oficio" required>
                  <option value="">Elige un oficio</option>
                  <option value="1">Gasfiter</option>
                  <option value="2">Electricista</option>
                  <option value="3">Cerrajero</option>
                </select>
              </div>
            </div>
          </div>
        </div>
          <br>
          <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 text-center" style="margin:auto;">
            <?php
            /**
             * Div del titulo del servicio
             */
             ?>
            <div class="form-group"><br>
              <label style="float:left; color:white;">Ingresa titulo:</label>
              <div class="input-group" id="">
                <input class="form-control" name="titulo" placeholder="titulo" required/>
              </div>
            </div>
            <?php
            /**
             * Div para ingresar nombre y apellido
             */
             ?>
            <div class="form-group">
              <label style="float:left; color:white;">Ingresa tu nombre y apellido:</label>
              <div class="input-group" id="">
                <input class="form-control" name="nombre" placeholder="nombre y apellido" required/>
              </div>
            </div>
            <?php
            /**
             * Div para ingresar direccion
             */
             ?>
            <div class="form-group">
              <label style="float:left; color:white;">Ingresa tu dirección:</label>
              <div class="input-group" id="">
                <input class="form-control" name="direccion" placeholder="ej: san jose #102, santiago, chile." required/>
              </div>
            </div>
            <?php
            /**
             * Div para ingresar telefono
             */
             ?>
            <div class="form-group">
              <label style="float:left; color:white;">Ingresa tu telefono:</label>
              <div class="input-group" id="">
                <input class="form-control" type="number" name="telefono" placeholder="telefono" required/>
              </div>
            </div>
            <br>
            <?php
            /**
             * Div para ingresar algun detalle importante
             */
             ?>
            <div class="form-group">
              <label style="float:left; color:white;">Ingresa detalle importante del servicio (opcional):</label>
              <div class="input-group" id="">
                <textarea class=" form-group col-md-12 col-sm-12 col-xs-12" name="detalles" rows="5"  placeholder="Ingrese detalle del servicio."></textarea>
              </div>
            </div>
            <?php
            /**
             * Boton para enviar parametros
             */
             ?>
            <button class=" btn btn-danger"   style="float:right;" type="submit" name="agendar">Agendar</button>

        </form>
      </div>
    </div>
  </div>
</div>




<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/eonasdan-bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js'></script><script  src="JS/st.js"></script>
<?php include_once "footer.php"; ?>
