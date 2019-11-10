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
  
<form class="border border-light p-5" action="insertar_peleador.php" method="POST">

    <p class="h4 mb-4 text-center">Registro de Peleadores</p>

   
    <input type="email" id="emailInput" class="form-control mb-4" placeholder="Email" name="email">

    
    <input type="password" id="passwdInput" class="form-control mb-4" placeholder="Clave" name="clave">

    
    <input type="text" id="textInput" class="form-control mb-4" placeholder="Nombre" name="nombre">

  
    <input type="text" id="textInput" class="form-control mb-4" placeholder="Apellido" name="apellido">

   
    <input type="text" id="textInput" class="form-control mb-4" placeholder="Edad" name="edad">

   
    <select class="browser-default custom-select mb-4" id="select" name="categoria">
        <option value="" disabled="" selected="">Seleccione su categoria</option>
        <option value="1">Peso pesado</option>
        <option value="2">Peso semi pesado</option>
        <option value="3">Peso mediano</option>
        <option value="4">Peso welter</option>
        <option value="5">Peso ligero</option>
        <option value="6">Peso pluma</option>
        <option value="7">Peso mosca</option>

    </select>

 
    <input type="text" id="textInput" class="form-control mb-4" placeholder="Nacionalidad" name="nacionalidad">

    <button class="btn btn-info btn-block my-4" type="submit">Registrase</button>

  
</form>

</div>

</div>
<?php include "pie.php"   ?>


<script src="vendor/jquery/jquery-3.4.1.min.js"></script>

<script src="vendor/popper/popper.min.js"></script>

<script src="vendor/bootstrap/js/bootstrap.min.js"></script>


</body>
</html>