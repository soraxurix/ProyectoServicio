<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Swwet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <!-- Animaciones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Mis estilos -->
    <link rel="stylesheet" href="css/styles-principal.css">
    <link rel="stylesheet" href="css/styles-perfil.css">
    <link rel="stylesheet" href="css/styles-loading.css">
    <title>Principal</title>
  </head>
  <body class="bg">
    <?php include("resources/php/sesiones/comprobarSesion.php") ?>
    <?php include("resources/barranav.php") ?>

    <div id="loaderPrincipal" class="loadingPrincipal">
      <div class="spinner-border text-info spinner-principal" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <!-- Navbar -->
    <div class="container-actualizarinfo">
      <div class="actualizarinfo">
        <h4 class="text-center text-info" id="titulo-perfil"></h4>
        <hr class="text-primary">
        <form>
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline" id="form-nombre">
                <input type="text" id="input-nombre" class="form-control" />
                <label class="form-label" for="input-nombre" >Nombre</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="input-apellido" class="form-control" />
                <label class="form-label" for="input-apellido">Apellidos</label>
              </div>
            </div>
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="input-email" class="form-control" value="John"/>
            <label class="form-label" for="input-email">Email</label>
          </div>
          <!-- Number input -->
          <div class="form-outline mb-4">
            <input type="number" id="input-telefono" class="form-control" />
            <label class="form-label" for="input-telefono">Teléfono</label>
          </div>
          <div class="form-outline mb-4">
            <input type="password" id="input-pass" class="form-control" />
            <label class="form-label" for="input-pass">Contraseña</label>
          </div>

          <!-- Submit button -->
          <a href="#" class="btn btn-success btn-rounded " id="buttonActualizar">Actualizar información</a>
          <a href="#" class="btn btn-danger btn-rounded ">Cerrar sesión</a>

        </form>
      </div>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script src="js/alertas.js" charset="utf-8"></script>
    <script src="js/script-perfil.js" charset="utf-8"></script>
  </body>
</html>