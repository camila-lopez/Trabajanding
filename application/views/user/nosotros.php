<?php
/**
 * Este archivo muestra una breve reseña de como nacio trabajandig.
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
<?php include_once "header-log.php"; ?>
    <br>
    <div class="container">
      <div class="row">

        <div id="fornlogin" class="col-md-10 mb-3 text-center">
          <br>
          <?php
          /**
           * Titulo de la pagina
           */
           ?>
          <h1>Sobre nosotros</h1>
          <p><strong>Bienvenido a Trabajanding!</strong> conoce un poco más sobre los creadores de ésta increíble APP WEB. </p>
          <br>
          <div class="col-md-8 col-sm-8 col-xs-12  slideanim text-justify" style="margin:auto;">
            <div class="row">
              <p>Trabajanding fue un proyecto pensado y creado en el 2020 para fines universitarios, Somos 2 jovenes de la Carrera Analista programador, quienes estan detras de este desarrollo. Nuestros nombres son Camila Lopéz y Diego González. </p>
              <p>Ambos tuvimos la idea de aportar a esta sociedad una idea que podría cambiar la forma de generar ingresos de una manera rápida y eficaz, debido al Covid-19 (Coronavirus) es que nació TRABAJANDING.</p>
              <p>Es una app Web que es basada en ayudar a personas a encontrar trabajo y también ayudar a personas con necesidades de algún oficio encontrar a un trabajador de confianza. Esto se logra através de nuestro sistema de evaluación y comentarios.</p>
              <p>Esperamos que disfruten de esta potente herramienta.</p>
              <?php
              /**
               * Link que dirige a contacto por cualquier duda
               */
               ?>
              <p>Cualquier duda <a id="aqui" href="<?=base_url('users/contacto')?>">ESCRIBANOS AQUI</a>.</p>
            </div>
          </div>
          <br>
        </div>
      </div>
    </div>
    <?php
    /**
     * se incluye el footer
     */
     ?>
<?php include_once "footer.php"; ?>
<?php
/**
 * estilos de css importantes para la pagina
 */
 ?>
<style media="screen">
  #aqui{
    color:#FEFCBA;
  }
  #aqui:hover{
    color:#FF544C;
  }
</style>
