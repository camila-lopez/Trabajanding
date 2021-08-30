<?php include_once "header-inc.php"; ?>
<?php
/**
 * Este archivo muestra las preguntas frecuentes en el usuario CLIENTE.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>

<br>
<?php
/**
 * Div del titulo
 */
 ?>
<div id="containerCenter" class="container text-center">
  <h1>Preguntas frecuentes</h1>
  <p>Algunas de las preguntas que recibimos a diario, si no esta lo que buscas no dudes en contactarte con nosotros.</p>
  <div id="forn" class="col-md-10 col-sm-10 col-xs12 mb-3">
    <br>
    <?php
    /**
     * Div para seccionar pregunta frecuente
     */
     ?>
    <div class="row">
      <div  class="col-md-8 col-sm-8 col-xs12" style=" margin:auto;">
        <details class="col-md-12 col-sm-12 col-xs12">
           <summary>¿Qué información usa Trabajanding?</summary>
           <br>
           <p id="ps">La información que manejamos es unica y exclusivamente para ayudar a brindar el mejor servicio posible.</p>
        </details>
        <?php
        /**
         * Div para seccionar pregunta frecuente
         */
         ?>
        <details class="col-md-12 col-sm-12 col-xs12">
           <summary>¿Mis pagos son seguros?</summary>
           <br>
           <p id="ps">Nuestro sistema de pago es seguro.</p>
        </details>
        <?php
        /**
         * Div para seccionar pregunta frecuente
         */
         ?>
        <details class="col-md-12 col-sm-12 col-xs12">
           <summary>¿Cómo cierro sesión?</summary>
           <br>
           <p id="ps">Ingresa a Perfil y desde ahi encontraras un botón de "Cerrar sesión".</p>
        </details>
      </div>
      <?php
      /**
       * Div para redireccionar a CONTACTO
       */
       ?>
      <div  class="col-md-8 col-sm-8 col-xs12" style=" margin:auto;">
        <br>
        <h6>¿No está lo que buscabas? <a id="tag" href="<?=base_url('cliente/contacto')?>">CONTACTANOS</a> </h6>
        <br>
      </div>
    </div>
  </div>
</div>
<br>
<?php include_once "footer.php"; ?>
<?php
/**
 * algunos parametros de css importantes para la pagina
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
