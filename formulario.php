<?php 
	$name = $_POST['nombre'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$mensaje = $_POST['mensaje'];

	echo $name. "Escribio <br/>".$mensaje;
	if(mail('allbox@gmail.com', $email, $tel, $mensaje)){
		echo "Mail enviado";
	}else{
		echo "No enviado"
 ?>