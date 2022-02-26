<!-- NAVBAR-->
<nav class="navbar navbar-expand-lg py-1 navbar-dark bg-secondary shadow-sm">
  <div class="container">
    <a href="#" class="navbar-brand">
      <!-- Logo Image -->
      <img src="../statics/logo2.png" width="50" alt="" class="d-inline-block align-middle mr-0">
      <!-- Logo Text -->
      <span class=" font-weight-bold">ATCiudadana</span>
    </a>

    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item "><a href="inicio.php" class="nav-link">Inicio <span class="sr-only">(current)</span></a></li>
        <?php if ($_SESSION['tipo'] == 2) { ?>
        <li class="nav-item"><a href="usuarios.php" class="nav-link">Usuarios</a></li>
        <li class="nav-item"><a href="solicitante.php" class="nav-link">Solicitudes</a></li>
        <?php } ?>

        <li class="nav-item"><a href="salir.php" class="nav-link">Salir</a></li>
      </ul>
    </div>
  </div>
</nav>





