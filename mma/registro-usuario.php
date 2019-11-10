<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>


	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="estilos.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
  <div class="container-fluid">
	<?php include "cabecera.php"  ?>

 

<div class="col-12">
  
<form class="border border-light p-5" action="insertar_usuarios.php" method="POST">

    <p class="h4 mb-4 text-center">Registro de usuario</p>

    <input type="email" id="defaultLoginFormEmail" name="email" class="form-control mb-4" placeholder="E-mail" required>

    <input type="password" id="defaultLoginFormPassword" name="clave"  class="form-control mb-4" placeholder="Password" required>

    

    <button class="btn btn-info btn-block my-4" type="submit">Registrar</button>

    

</form>

</div>

</div>
<?php include "pie.php"   ?>


<script src="vendor/jquery/jquery-3.4.1.min.js"></script>

<script src="vendor/popper/popper.min.js"></script>

<script src="vendor/bootstrap/js/bootstrap.min.js"></script>


</body>
</html>