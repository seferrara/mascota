<?php 
	
	$destinatario = "nikpaolillo95@gmail.com";
	$asunto = "Solicitud de contacto via web";
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['mail'];
	$headers = "From: ".$nombre." <".$email.">\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$telefono = $_POST['telefono'];
	$mensaje = "<html><body>";
	$mensaje .= "<h1>Mensaje via MASCOTA</h1>";
	$mensaje .= "<p style='font-size:20px'>Nombre: " . $nombre . $apellido . "</p>";
	$mensaje .= "<p style='font-size:20px'>Telefono: " . $telefono . "</p>";
	$mensaje .= "<p style='font-size:20px'>Email: " . $email . "</p>";
	$mensaje .= "<p style='font-size:20px'>Mensaje: " . $_POST["mensaje"] . "</p>";
	$mensaje .= "</body></html>";

	mail($destinatario,$asunto,$mensaje,$headers);

	header ("Location: index.html");

 ?>