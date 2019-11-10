<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Perfil del usuario</title>
	</head>

	<body>
		
		<?php
			$conexion = new mysqli("localhost", "root", "", "formulariobd");

			$sql = "SELECT * FROM personas WHERE persona_id = " . $_GET["id_persona"];

			$perfiles = $conexion->query($sql);

			foreach ( $perfiles as $perfil) {
		?>

				<ul>
					<li>Nombre: <?= $perfil["persona_nombre"] ?></li>
					<li>Email: <?= $perfil["persona_email"] ?></li>
					<li>Edad: <?= $perfil["persona_edad"] ?></li>
				</ul>
				
				<img src="archivos/fotos_perfil/<?= $perfil["persona_imagen"]?>" alt="">

		<?php }
		?>



	</body>

</html>