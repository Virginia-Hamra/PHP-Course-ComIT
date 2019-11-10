<?php

$nombre = $_REQUEST["nombre"];
$edad   = $_REQUEST["edad"];
$email  = $_REQUEST["email"];

$conexion = new mysqli("localhost", "root", "", "formulariobd");

$sql = 'INSERT INTO personas(persona_nombre, persona_email, persona_edad) VALUES("' . $nombre . '","' . $email . '",' . $edad . ')';

$conexion->query($sql);

?>