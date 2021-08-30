<?php
/**
 * Este archivo es el footer de la app web.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>

 <?php
 /**
  * Se incluye algunos estilos de css importantes para el footer
  */
  ?>
<style>
li{
  margin-left: 27px;
}

#fot{
  width:200px;
  float: right;
  margin-bottom: 10px;
}
</style>

<footer>
  <div class="container-fluid">
    <div class="row">
      <?php
      /**
       * Se hace una lista con links importantes
       */
       ?>
      <ul class="pagination pagination-lg">
        <li><a class="text-white" href="<?=base_url('cliente/nosotros')?>">Sobre nosotros</a></li>
        <li><a class="text-white" href="<?=base_url('cliente/privacidad')?>">Privacidad</a></li>
      </ul>
      <div class="col-md-12">
        <?php
        /**
         * Div donde se carga imagen del footer
         */
         ?>
        <img id="fot" src="<?=base_url();?>assets/image/love.png" alt="">
      </div>
    </div>
  </div>
</footer>
</body>
<?php
/**
 * se cargan los JS de la pagina
 */
 ?>
<script type="text/javascript" src="<?=base_url();?>assets/js/Popper.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
</html>
