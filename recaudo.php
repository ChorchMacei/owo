<!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Thu Oct 31 2024 21:38:04 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="66faa8fced96045510b94d9a" data-wf-site="66df17562688b6d820491c3e">
<?php $titulo='Recaudo | OWO'; ?>
<?php if ( ! @include( 'inc/header.php' ) ) die( 'header unable to conect' ); ?>
<body class="body">
<?php if ( ! @include( 'inc/nav.php' ) ) die( 'nav unable to conect' ); ?>
  <section class="contenedor-top">
    <div class="w-layout-blockcontainer contenedor-data-top w-container">
      <div id="w-node-_26808c4d-f90f-b48e-e5b2-44821887318e-10b94d9a" class="w-layout-layout data-x-2 wf-layout-layout">
        <div class="w-layout-cell foto-izq-top"><img src="images/chica-con-factura.webp" loading="lazy" width="696" sizes="(max-width: 991px) 100vw, 696px" alt="" srcset="images/chica-con-factura-p-500.webp 500w, images/chica-con-factura.webp 539w" class="image-16"></div>
        <div class="w-layout-cell texto-der-top">
          <h5 class="boton-top apuestas seguros chance seguros-y-asistencia">Recaudo</h5>
          <div class="w-layout-hflex contenedor-titulo-1">
            <h1 class="h1-top">¡Con 21.000 convenios <br>de recaudo, <br>‍<span class="text-span-2">puedes pagar todo!</span></h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <img src="images/tira-violeta.webp" loading="lazy" sizes="(max-width: 1920px) 100vw, 1920px" srcset="images/tira-violeta-p-500.webp 500w, images/tira-violeta-p-800.webp 800w, images/tira-violeta-p-1080.webp 1080w, images/tira-violeta-p-1600.webp 1600w, images/tira-violeta.webp 1920w" alt="" class="image-95"><img src="images/izquierda.png" loading="lazy" alt="" class="image-62">
  <div class="logo-carousel nomenos991">
    <div class="logos-container">
      <?php $directory = 'images/pasarela-logos/'; // Cambia esto al folder de tus logos
      $images = glob($directory . "*.{jpg,png,gif}", GLOB_BRACE);
        foreach($images as $image) {
          echo '<img src="' . $image . '" class="logo-item-carrousel">';
          } ?>
    </div>
  </div>
  <section class="recargas-2">
    <section class="recar-seccion-2">
      <div id="w-node-_292fa25d-74d9-03a4-01b7-0ad8aced0821-10b94d9a" class="w-layout-layout caja-foto-texto-recargas recaudo wf-layout-layout">
        <div id="w-node-_292fa25d-74d9-03a4-01b7-0ad8aced0822-10b94d9a" class="w-layout-cell"><img src="images/chico-con-factura.png" loading="lazy" sizes="(max-width: 514px) 100vw, 514px" srcset="images/chico-con-factura-p-500.png 500w, images/chico-con-factura.png 514w" alt=""></div>
        <div id="w-node-_292fa25d-74d9-03a4-01b7-0ad8aced0823-10b94d9a" class="w-layout-cell caja-pines recudos-mobile-2">
          <h2 class="titulo-chance-seccion-2">¿Sigues pagando en efectivo?</h2>
          <p class="parrafo-seccion-2-recargas">Usando OWO puedes pagar facturas de telefonía, internet, servicios públicos, recaudos de ventas por catálogo, aseguradoras, impuestos, planilla pila, cuotas de administración y mucho más. Lo mejor de todo es que ganas comisiones por cada transacción.</p>
          <h1 class="caja-tutilo-seccion-2-general recaudo-mobile-1">Recaudos</h1>
          <p class="caja-subtitulo-subtitulo-subtitulo-seccion-2-general">
            <div class="estilo-carrousel-celu">
              <div class="logo-carousel nomas991">
                <div class="logos-container">
                  <?php $directory = 'images/pasarela-logos/wep/'; // Cambia esto al folder de tus logos
                  $images = glob($directory . "*.{jpg,png,gif}", GLOB_BRACE);
                    foreach($images as $image) {
                      echo '<img src="' . $image . '" class="logo-item-carrousel">';
                      } ?>
                </div>
              </div>
            </div>
          </p>
          <p class="caja-subtitulo-subtitulo-subtitulo-seccion-2-general subtitulo-recaudo">
          <span class="text-span-23">21.000 convenios de recaudo,</span> puedes pagar todo!</p>
          <p class="caja-subtitulo-subtitulo-seccion-general">Usando OWO puedes pagar facturas de telefonía, internet, servicios públicos, recaudos de ventas por catálogo, aseguradoras, impuestos, planilla pila, cuotas de administración y mucho más. Lo mejor de todo es que ganas comisiones por cada transacción.</p>
        </div>
      </div>
    </section>
  </section>
  <div class="w-layout-vflex descarga-tu-app-chances recaudo">
    <p class="paragraph-17">¿Sigues pagando<br>físicamente?</p>
    <p class="paragraph-14">¡Olvídate de hacer <br><span class="text-span-24">vueltas para pagar!</span></p>
    <a href="onbording.html" class="boton-descargar-1 _1 chance chance-tablet w-inline-block"><img src="images/descargar-boton.png" loading="lazy" alt=""></a>
  </div>
  <section class="recargas-3">
    <div class="w-layout-blockcontainer regargas-titulo-seccion-3 _2 w-container">
      <h2 class="sub-titulo-recargas-3">¡Olvídate de hacer<span class="text-span-7"> <br>vueltas para pagar!</span></h2>
    </div>
  </section>
  <h4 class="h4-descarga">Descarga para</h4>
  <div class="w-layout-blockcontainer contenedor-de-qr-chico w-container">
    <div class="w-layout-vflex cajita-qr-chicos"><img src="images/boton-app-store.png" loading="lazy" width="142" alt="app"><img src="images/qr-apple.png" loading="lazy" width="108" alt="qr para descargar desde apple store, la app
"></div>
    <div class="w-layout-vflex cajita-qr-chicos"><img src="images/boton-gogle-play-nuevo.svg" loading="lazy" alt=""><img src="images/qr-play.png" loading="lazy" width="108" alt=""></div>
  </div>
  <?php if ( ! @include( 'inc/footer.php' ) ) die( 'footer unable to conect' ); ?>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=66df17562688b6d820491c3e" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>