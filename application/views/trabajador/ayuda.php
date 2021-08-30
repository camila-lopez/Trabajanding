<?php
/**
 * Este archivo muestra preguntas frecuentes del usuario trabajador.
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
<div id="containerCenter" class="container text-center">
  <?php
  /**
   * titulo de la pagina
   */
   ?>
  <h1>Preguntas frecuentes</h1>
  <p>Algunas de las preguntas que recibimos a diario, si no esta lo que buscas no dudes en contactarte con nosotros.</p>
  <div id="forn" class="col-md-10 col-sm-10 col-xs12 mb-3">
    <br>
    <div class="row">
      <div  class="col-md-8 col-sm-8 col-xs12" style=" margin:auto;">
        <?php
        /**
         * Div con pregunta frecuente
         */
         ?>
        <details class="col-md-12 col-sm-12 col-xs12">
           <summary>¿Qué información usa Trabajanding?</summary>
           <br>
           <p id="ps">La información que manejamos es unica y exclusivamente para ayudar a brindar el mejor servicio posible.</p>
        </details>
        <?php
        /**
         * Div con pregunta frecuente
         */
         ?>
        <details class="col-md-12 col-sm-12 col-xs12">
           <summary>¿Mis pagos son seguros?</summary>
           <br>
           <p id="ps">Nuestro sistema de pago es seguro.</p>
        </details>
        <?php
        /**
         * Div con pregunta frecuente
         */
         ?>
        <details class="col-md-12 col-sm-12 col-xs12">
           <summary>¿Cómo cierro sesión?</summary>
           <br>
           <p id="ps">Ingresa a Perfil y desde ahi encontraras un botón de "Cerrar sesión".</p>
        </details>
      </div>
      <div  class="col-md-8 col-sm-8 col-xs12" style=" margin:auto;">
        <br>
        <?php
        /**
         * link para redirigir a contacto
         */
         ?>
        <h6>¿No está lo que buscabas? <a id="tag" href="<?=base_url('trabajador/contacto')?>">CONTACTANOS</a> </h6>
        <br>
      </div>
    </div>
  </div>
</div>
<br>
<?php
/**
 * se incluye footer
 */
 ?>
<?php include_once "footer.php"; ?>
<?php
/**
 * estilo css importate de la pagina
 */
 ?>
<style media="screen">
#wrap{
margin: 0 auto;
width: 500px;
}
details{
padding: 10px;
margin-bottom:5px;
width:500px;
background-color: #668C9B;
}
summary{
font-weight: bold;
font-size: 15px;
color:white;
cursor: pointer;
}
details summary::-webkit-details-marker {
float: left;
color: #D82E3C;
}
</style>
