<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aplicacion</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="#">Aplicación</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">

						<li class="nav-item">
							 <a class="nav-link" href="#">Publicar</a>
						</li>

						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Menu</a>

							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Mis publicaciones</a>

								 <a class="dropdown-item" href="#">Mis compras</a>

								 <a class="dropdown-item" href="#">Mis ventas</a>
							</div>

						</li>

					</ul>
					<form class="form-inline">

						<input name="busqueda" class="form-control mr-sm-2" type="text"> 

						<button class="btn btn-primary my-2 my-sm-0" type="submit">
							Buscar
						</button>
					</form>
					<ul class="navbar-nav ml-md-auto">
		

						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Pablo Tilli</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
								 
								 <a class="dropdown-item" href="#">Mi cuenta</a>

								<div class="dropdown-divider">

								</div> <a class="dropdown-item" href="#">Salir</a>

							</div>

						</li>

					</ul>
				</div>
			</nav>
		</div>
	</div>

	<!-- SLIDER DE PUBLICIDADES -->

	<?php
	 	include("slider_publicidades.inc.php"); 
	 ?>


	 <form action="procesar_form.php" method="GET">

	 	<label for="nombre">Nombre:</label>
	 	<input name="nombre" type="text">

	 	<label for="email">E-mail:</label>
	 	<input name="email" type="email">

	 	<label for="password">Contraseña:</label>
	 	<input name="password" type="password">

		<label for="fecha_nacimiento">Fecha de nacimiento:</label>
	 	<input name="fecha_nacimiento" type="date">

	 	<label for="edad">Edad</label>
	 	<input name="edad" type="number">

	 	<label for="color_favorito">Color favorito:</label>
	 	<input name="color_favorito" type="color">

	 	<input name="id_oculto" type="hidden">

		<input type="file">

		<label for="categoria">Categoria:</label>
		<select name="categoria">
			<option value="10">Electronica</option>
			<option value="25">Computación</option>
			<option value="53">Muebles</option>
		</select>

	 	<input type="submit">
	 </form>

	 <a href="perfil_usuario.php?id_persona=3">Mi perfil</a>
		

	<!-- LISTADO DE PRODUCTOS -->
	
	<div class="row mt-5">
		<div class="col-md-12">
			<div class="row">

				<?php

					$conexion = new mysqli("localhost", "root", "", "aplicacion");

					$busqueda = "";
					if (isset($_GET["busqueda"])){
						$busqueda = $_GET["busqueda"];
					}

					$consulta = "SELECT * FROM publicaciones WHERE pub_titulo LIKE '%" . $busqueda . "%'";

					$publicaciones = $conexion->query( $consulta );

					foreach ($publicaciones as $publicacion ) {
						
				?>

							<div class="col-md-4">
								<div class="card">
									<img class="card-img-top" alt="Bootstrap Thumbnail First" src="archivos/<?= $publicacion["pub_imagen"]?>">

									<div class="card-block">
										<h5 class="card-title">
											<?php echo $publicacion["pub_titulo"] ?>
										</h5>
										<p class="card-text">
											<?php echo $publicacion["pub_descripcion"] ?>
										</p>
										<p>
											<a class="btn btn-primary" href="#">Mas info...</a> 
										</p>
									</div>
								</div>
							</div>

				<?php	
					}
				?>

			</div>
		</div>
	</div>


</div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>