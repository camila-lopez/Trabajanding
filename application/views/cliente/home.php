
<?php include_once "header-inc.php"; ?>
<?php
/**
 * Este archivo muestra el inicio en el usuario CLIENTE.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>
<br>
<br>
<div class="container">
  <div class="row">

    <div id="fornlogin" class="col-md-12 mb-3 text-center">
      <br>
      <div class="container">
        <div class="row">
          <?php
          /**
           * Div donde se carga el nombre de usuario (cliente)
           */
           ?>
          <div id="forncenter" class="col-md-10">
            <?php $user = $this->session->userdata()?>
            <div id="welcome" class="col-md-12 col-sm-12 col-xs-12">
              <h2 class="text-center">Bienvenido/a: <?php echo $user["nombre"];?></h2>
              <br>
            </div>
            <div class="container">
              <div class="row">
                <br>
                <?php
                /**
                 * Div donde se cargan los servicio que hay
                 */
                 ?>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <h3>Nuestros servicios</h3>
                  <br>
                  <?php
                  /**
                   * estilos de css importantes para el home cliente
                   */
                   ?>
<style>
  #oficio{
    background-color: #668C9B;
    color:white;
    text-decoration: none;
  }
  #oficio:hover{
    background-color: #37546C;
  }
  #welcome{
    color:white;
  }
</style>

                  <div class="list-group">
                    <a id="oficio"  href="#" class="list-group-item" >GASFITER</a>
                    <a id="oficio"  href="#" class="list-group-item" >ELECTRICISTA</a>
                    <a id="oficio"  href="#" class="list-group-item" >CERRAJERO</a>
                  </div>
                  <br>
                  <?php
                  /**
                   * Formulario para agendar un servicio con boton que redirecciona a 'agendar servicio'
                   */
                   ?>
                  <form action="<?=base_url("cliente/agendar")?>" method="POST">
                    <button type="submit" class="btn btn-danger">Ir a Agendar servicio</button>
                  </form>
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
 * se incluye el footer y el header
 */
 ?>
<?php include_once "footer.php"; ?>
