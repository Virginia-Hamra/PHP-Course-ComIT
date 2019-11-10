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
  
<form class="border border-light p-5" action="login.php" method="POST">

    <p class="h4 mb-4 text-center">Ingresar</p>

    <input type="email" id="defaultLoginFormEmail" name="email" class="form-control mb-4" placeholder="E-mail">

    <input type="password" id="defaultLoginFormPassword" name="clave"  class="form-control mb-4" placeholder="Password">

    <div class="d-flex justify-content-between">
        <div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        <div>
            <a href="">Forgot password?</a>
        </div>
    </div>

    <button class="btn btn-info btn-block my-4 mt-5" type="submit">Ingresar</button>

    <div class="text-center">
      

        <p> No esta registrado ?
            
        </p>
         </div>
<div class="row mt-5">

    

<div class="col-6">

<div align="center">
 <a class="btn btn-primary" href="registro-usuario.php" role="button">Registrase como usuario</a></div>
</div>


<div class="col-6">
     <div align="center">
 <a class="btn btn-primary" href="registro-peleadores.php" role="button">Registrase como peleador</a></div>
</div>

       
   </div>
</form>

</div>

</div>
<?php include "pie.php"   ?>


<script src="vendor/jquery/jquery-3.4.1.min.js"></script>

<script src="vendor/popper/popper.min.js"></script>

<script src="vendor/bootstrap/js/bootstrap.min.js"></script>


</body>
</html>