<?php
	$to 		=	"juanma.03.17.07@gmail.com";
	$name 		=	$_REQUEST["name"];
	$from 	    =	$_REQUEST["from"];
	$subject	=	$_REQUEST["subject"];
	$message	=	$_REQUEST["message"];
	$message	=	wordwrap($message, 70, "\r\n");

    // Es obligatorio establecer el tipo de contenido al enviar correo electrónico HTML
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	// More headers. From is required
    $headers .= 'From: ' . $from;

	$retval = mail($to, $subject, $message, $headers);

	if( $retval == true ) {
	   echo "Mensaje enviado exitosamente...";
	}else {
	   echo "Mensaje no pudo ser enviado...";
	}

    header("Location: index.html");
    exit();
?>