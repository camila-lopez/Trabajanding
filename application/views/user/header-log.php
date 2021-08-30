<?php
/**
 * Este archivo es el header.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
    /**
     * archivos css importantes para la funcionalidad de la app web
     */
     ?>
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">


  </head>
  <body style="background-color:#37546C;">
    <header>
      <div class="container-fluid">
        <div class="row">
          <?php
          /**
           * div que carga imagen de logo e imagen de icono de aayuda
           */
           ?>
          <div class="col-md-12">
            <img id="logo" src="<?=base_url();?>image/log.png" alt="">
            <a href="#"><img id="ques" src="<?=base_url();?>image/question.png" alt=""> </a>
          </div>
        </div>
      </div>
    </header>
<?php
/**
 * fin del header
 */
 ?>
