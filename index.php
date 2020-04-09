<!DOCTYPE html>
<html lang="es">

<head>
  <?php include ('./dotk/00head/analitycs.html'); ?>
  <?php include ('./dotk/00head/cabecera.html'); ?>
  <?php include ('./dotk/00head/estilos.html'); ?>

</head>

<body>

  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php include ('../lib18/seph/hf/header.html'); ?>

    <nav>
      <!-- Menu principal superior -->
      <?php //include ('../lib18/coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
    </nav>

  </header>

  <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

  <main>
    <div class="container marketing">
      <br />

      <h1>Investigadores vigentes en el Sistema Nacional de Investigadores de la UPPachuca</h1>
      <br />
      <br />

      <table class="table table-striped table-responsive">

        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Nivel</th>
            <!--<th scope="col" class="col-sm-3">Integrantes</th>-->
          </tr>
        </thead>

        <tbody>
          <?php include ('./dotk/sni.html'); ?>
        </tbody>

      </table>

      <br>

      <table class="table table-striped table-responsive">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nivel</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr><td >Nivel 2</td>	<td>2</td></tr>
          <tr><td >Nivel 1</td>	<td>14</td></tr>
          <tr><td >Nivel C</td>	<td>12</td></tr>
          <tr><td >TOTAL</td>	<td>28</td>	</tr>
        </tbody>
      </table>







      <h1>Investigadores con reconocimiento al perfil deseable PRODEP</h1>
      <br />
      <br />

      <?php include ('./dotk/prodep.html'); ?>











      <br />
      <br />
      <a id="mapadesitio"></a>
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

    </div>

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include ('../lib18/seph/hf/footer.html'); ?>
  </footer>

  <!-- libreria Animate -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
  </script>
  <script>
    new WOW().init();
  </script>





  <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib18/coreFRONTx/10boton-arriba/script.js"></script>

</body>

</html>
