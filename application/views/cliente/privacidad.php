<?php include_once "header-inc.php"; ?>

<?php
/**
 * Este archivo muestra reglas basica de privacidad de informacion.
 *
 * @author Diego Gónzalez y Camila López
 * @version 1.0
 */
 ?>
    <br>
    <div class="container">
      <div class="row">

        <div id="fornlogin" class="col-md-10 mb-3 text-center">
          <br>
          <?php
          /**
           * titulo de la pagina
           */
           ?>
          <h1>Privacidad</h1>
          <p>Conoce sobre nuestras políticas de privacidad. </p>
          <br>
          <div class="col-md-8 col-sm-8 col-xs-12  slideanim text-justify" style="margin:auto;">
            <?php
            /**
             * Div con explicacion por punto de uso de privacidad de datos
             */
             ?>
            <div class="row">
              <h6>1. NUESTRO COMROMISO CON LA PRIVACIDAD</h6>
              <p>Esta Política de Privacidad indica la información que TRABAJANDING puede recopilar y el uso que puede dar a esa información. También explica las medidas de seguridad tomadas para proteger su información, su posibilidad de acceder a su información, y a quién podrá contactar en NAVENT para que sus preguntas en relación con esta Política de Privacidad sean contestadas.</p>
              <h6>2. RECOPILACIÓN Y UTILIZACIÓN DE SU INFORMACIÓN</h6>
              <p>TRABAJANDING no recopilará a través del Sitio Web ninguna información sobre usted que pueda identificarlo personalmente, como, por ejemplo, su nombre, dirección, número de teléfono o dirección de correo electrónico (en adelante, la " Información Personal "), a menos que usted nos la brinde en forma voluntaria. Si usted no desea que recopilemos su Información Personal, por favor absténgase de proporcionarla. Sin embargo, deberá tener en cuenta que en caso de no proporcionarnos su Información Personal, no podrá acceder a los servicios e información disponibles a través del Sitio Web.</p>
              <h6>3. INFORMACIÓN PERSONAL</h6>
              <p>NAVENT recopila Información Personal en línea cuando, entre otros casos:

                  - Usted se registra para hacer uso de alguno de los servicios disponibles del Sitio Web.

                  - Usted utiliza el Sitio Web.

                  - Usted nos envía preguntas, consultas o comentarios o se contacta con el Sitio Web.

                  - Usted solicita información o materiales.
              </p>
              <h6>4. COMPARTIENDO SU INFORMACIÓN</h6>
              <p>La Información Personal que usted suministre será reputada y tratada como confidencial. Sin perjuicio de lo expuesto, NAVENT podrá compartir total o parcialmente la Información Personal suministrada por usted, incluyendo registros de comportamiento y actividad en el Sitio, contactos a terceros que anuncien u ofrezcan productos o servicios en el Sitio, parámetros de interés de búsquedas así como su historial de búsqueda y preferencias a empresas del grupo Navent (para conocer las empresas del grupo TRABAJANDING, y a los anunciantes del Sitio Web, entidades financieras y compañías de seguro de primera línea y reconocida trayectoria con la finalidad de proveerle ofertas, anuncios e información que se ajusten en la mayor medida posible a sus expectativas y preferencias.</p>
              <h6>5. CONTACTO</h6>
              <p>Si tiene preguntas sobre su privacidad cuando utilice el Sitio Web, por favor <a id="aqui" href="<?=base_url('cliente/contacto')?>">CONTÁCTENOS AQUÍ</a>.</p>

              <p>Esta Política de Privacidad fue actualizada por última vez el 29 de Junio de 2021.</p>
            </div>
          </div>
          <br>
        </div>
      </div>
    </div>
    <?php
    /**
     * se carga el footer y el header
     */
     ?>
<?php include_once "footer.php"; ?>

<?php
/**
 * estilo css importante para la pagina
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
