<?php
/**
 * Este archivo es el footer.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>
<footer>
  <div class="container-fluid">
    <div class="row">
      <?php
      /**
       * Ul con links importantes del footer
       */
       ?>
      <ul class="pagination pagination-lg">
        <li><a class="text-white" href="<?=base_url('trabajador/nosotros')?>">Sobre nosotros</a></li>
        <li><a class="text-white" href="<?=base_url('trabajador/privacidad')?>">Privacidad</a></li>
      </ul>
      <?php
      /**
       * Div que carga la imagen del footer
       */
       ?>
      <div class="col-md-12">
        <img id="fot" src="<?=base_url();?>assets/image2/love.png" alt="">
      </div>
    </div>
  </div>
</footer>
</body>
<?php
/**
 * script para funcionalidad de la app web
 */
 ?>
<script type="text/javascript" src="<?=base_url();?>assets/js2/Popper.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js2/bootstrap.min.js"></script>
</html>
