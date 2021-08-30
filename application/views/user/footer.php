
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
        <li><a class="text-white" href="<?=base_url('users/nosotros')?>">Sobre nosotros</a></li>
        <li><a class="text-white" href="<?=base_url('users/privacidad')?>">Privacidad</a></li>
      </ul>
      <?php
      /**
       * div que carga la imagen del footer
       */
       ?>
      <div class="col-md-12">
        <img id="fot" src="assets/image/love.png" alt="">
      </div>
    </div>
  </div>
</footer>
</body>
<?php
/**
 * script importantes para el funcionamiento de la app web
 */
 ?>
<script type="text/javascript" src="assets/js/Popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</html>
<?php
/**
 * fin del footer
 */
 ?>
