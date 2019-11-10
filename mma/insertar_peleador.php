<?php

$email=$_POST['email'];
$clave=$_POST['clave'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$categoria=$_POST['categoria'];
$nacionalidad=$_POST['nacionalidad'];


$contenido_mail="Usuario: ".$email."\r\n"."Clave: ".$clave;


mail($email, "Registro de usuario",$contenido_mail);



include("coneccion.php");

mysqli_query($datos_conexion, "INSERT INTO peleadores VALUES (DEFAULT,'$email','$clave','$nombre','$apellido','$edad','$categoria','$nacionalidad')");




header("Location: mensaje.php");




?>