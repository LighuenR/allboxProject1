<?php 	
	$mySpaceEmail = "correogratuito@dt.am"
	$myPersonalEmail = "allbox@gmail.com"

	if(isset($_POST["submit"])){
	$name = $_POST['nombre'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$mensaje = $_POST['mensaje'];

	echo $name. "Escribio <br/>".$mensaje;}
	else if(mail('allbox@gmail.com', $email, $tel, $mensaje)){
		echo "Mail enviado";
	}else{
		echo "No enviado"
		}
 ?>