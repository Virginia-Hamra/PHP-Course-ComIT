<?php

$email=$_POST['email'];
$clave=$_POST['clave'];


$contenido_mail="Usuario: ".$email."\r\n"."Clave: ".$clave;


mail($email, "Registro de usuario",$contenido_mail);



include("coneccion.php");

mysqli_query($datos_conexion, "INSERT INTO usuarios VALUES (DEFAULT,'$email','$clave')");




header("Location: mensaje.php");




?>