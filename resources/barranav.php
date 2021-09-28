<?php
echo '
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand text-white" href="#">Sistema Química</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link text-white" href="#">Perfil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="#">Cotización</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="#">Resultados</a>
				</li>
		</ul>
		<a href="resources/php/sesiones/cerrarSesion.php" class="btn btn-outline-dark">Cerrar Sesion</a>
	</div>
</nav>
';
 ?>
