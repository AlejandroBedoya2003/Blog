<?php

//Tell Zone
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

//Date Email
$destitanatario = "alejandromoreno591@gmail.com";
$asunto = "Contacto: Minutos Hector";

$carta = "De: $nombre\n";
$carta .= "Correo: $correo\n";
$carta .= "Telefono: $telefono\n";
$carta .= "Mensaje: $mensaje";

//Send Message
mail($destitanatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');
?>