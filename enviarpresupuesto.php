<?php 


	$destinatario = "nikpaolillo95@gmail.com";
	$asunto = "Pedido de presupuesto via web";

	$nombre = $_POST['nombre'];
	$tel = $_POST['telefono'];
	$mail = $_POST['mail'];
	$cuerpo = $_POST['mensaje'];

	 if(isset($_POST['cant1']) AND isset($_POST['art1']) AND isset($_POST['artnum1'])) {
	 	$cant1 = $_POST['cant1'];
	 	$art1 = $_POST['art1'];
	 	$artnum1 = $_POST['artnum1'];
	 }

	 if(isset($_POST['cant2']) AND isset($_POST['art2']) AND isset($_POST['artnum2'])) {
	 	$cant2 = $_POST['cant2'];
	 	$art2 = $_POST['art2'];
	 	$artnum2 = $_POST['artnum2'];
	 }

	 if(isset($_POST['cant3']) AND isset($_POST['art3']) AND isset($_POST['artnum3'])) {
	 	$cant3 = $_POST['cant3'];
	 	$art3 = $_POST['art3'];
	 	$artnum3 = $_POST['artnum3'];
	 }

	 if(isset($_POST['cant4']) AND isset($_POST['art4']) AND isset($_POST['artnum4'])) {
	 	$cant4 = $_POST['cant4'];
	 	$art4 = $_POST['art4'];
	 	$artnum4 = $_POST['artnum4'];
	 }

	 if(isset($_POST['cant5']) AND isset($_POST['art5']) AND isset($_POST['artnum5'])) {
	 	$cant5 = $_POST['cant5'];
	 	$art5 = $_POST['art5'];
	 	$artnum5 = $_POST['artnum5'];
	 }

	$headers = "From: ".$nombre." <".$mail.">\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$mensaje = "<html><body>";
	$mensaje .= "<h1>Pedido de presupuesto MASCOTA</h1>";
	$mensaje .= "<p style='font-size:20px'>Nombre: " . $nombre . "</p>";
	$mensaje .= "<p style='font-size:20px'>Telefono: " . $tel . "</p>";
	$mensaje .= "<p style='font-size:20px'>Email: " . $mail . "</p>";
	$mensaje .= "<hr>";
	$mensaje .= "<p style='font-size:20px'>Articulo: " . $art1 . " -" . "Num: " . $artnum1 . " Cantidad: " . $cant1 . "</p>";
	if(isset($art2) AND isset($cant2)) {
		$mensaje .= "<p style='font-size:20px'>Articulo: " . $art2 . " -"  . "Num: " . $artnum2 . " Cantidad: " . $cant2 . "</p>";
	}
	if(isset($art3) AND isset($cant3)) {
		$mensaje .= "<p style='font-size:20px'>Articulo: " . $art3 . " -" . "Num: " . $artnum3 . " Cantidad: " . $cant3 . "</p>";
	}
	if(isset($art4) AND isset($cant4)) {
		$mensaje .= "<p style='font-size:20px'>Articulo: " . $art4 . " -" . "Num: " . $artnum4 . " Cantidad: " . $cant4 . "</p>";
	}
	if(isset($art5) AND isset($cant5)) {
		$mensaje .= "<p style='font-size:20px'>Articulo: " . $art5 . " -" . "Num: " . $artnum5 . " Cantidad: " . $cant5 . "</p>";
	}
	if(isset($art6) AND isset($cant6)) {
		$mensaje .= "<p style='font-size:20px'>Articulo: " . $art6 . " -" . "Num: " . $artnum6 . " Cantidad: " . $cant6 . "</p>";
	}
	$mensaje .= "<hr>";
	$mensaje .= "<p style='font-size:20px'>Mensaje: " . $cuerpo . "</p>";
	$mensaje .= "</body></html>";

	mail($destinatario,$asunto,$mensaje,$headers);

	header ("Location: index.html");

 ?>