<?php
echo '
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler text-info" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <strong>
        <a class="navbar-brand text-info" href="#">Química</a>
      </strong>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Cotización</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Resultados</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Avatar -->
      <a class="dropdown-toggle d-flex align-items-center hidden-arrow " href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-cog config-button"></i>
        <!-- <img src="https://mdbootstrap.com/img/new/avatars/2.jpg"  /> -->
      </a>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
        <li>
          <a class="dropdown-item" href="perfil.php">
            <i class="fas fa-user-alt"></i> Mi perfi </a>
        </li>
        <li>
          <a class="dropdown-item" href="resources/php/sesiones/cerrarSesion.php">
            <i class="fas fa-sign-out-alt"></i> Cerrar sesión </a>
        </li>
      </ul>
    </div>
    <!-- Right elements -->
  </div>
</nav>
';
 ?>
