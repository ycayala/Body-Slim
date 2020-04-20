<?php
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$correo = $_POST["email"];
	$contenido = $_POST["contenido"];

	$para = "camargo.ayala@gamil.com";
	$asunto = "Cliente BoySlim";


	$header  = 'From: ' . $correo . " \r\n"; 
	$header .= "X-Mailer: PHP/".phpversion(). " \r\n"; 
	$header .= "Mime-Version: 1.0 \r\n"; 
	$header .= "Content-Type: text/plain";
	
	$mensaje = "
	Nombre del remitente: ".$nombre."
	Correo: ".$correo."
	Comentario: ".$contenido."
	";
	$retval = mail ($para,$asunto,utf8_decode($mensaje));
	
	 if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
    header ("Location: contactenos.php");
?>