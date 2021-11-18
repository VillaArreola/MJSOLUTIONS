<?php
if(isset($_POST)){
	
	// Conexión a la base de datos
    require_once '../php/conexion.php';

	// Recorger los valores del formulario de actulizacion
    $email_code = isset($_POST['email-code']) ? mysqli_real_escape_string($db, $_POST['email-code']) : false;

    // Consulta para comprobar las credenciales del usuario
	$sql = "SELECT * FROM usuarios WHERE email = '$email_code'";
	$login = mysqli_query($db, $sql);
	

	// Array de errores
	$errores = array();

	if ($login && mysqli_num_rows($login) == 1) {
		$usuario = mysqli_fetch_assoc($login);

	

		$name = $usuario['nombre'];
		$mail = $usuario['email'];
		$email_soporte = 'Soporte@mjsolutions.com';
		$codigo = $usuario['password'];
		

		$header = 'from: ' . $email_soporte . "\r\n";
		$header .= "X-Mailer:PHP/" . phpversion() . "\r\n";
		$header .= "Mime-Version:1.0 \r\n";
		$header .= "content-Type:text/plain";

		$message = "Estimado: " . $name . " recientementw recibimos usa solicitutud para cambio de contraseña;";
		$message .= "Su codigo es : " . $codigo . "\r\n";
		$message .= "Uselo para resstablecer la contraseña en www.youtube.com " .  "\r\n";
		$message .= "Si usted no solicito ningun codigo por favor omita este correo "  . "\r\n";

		$message .= "enviado el: " . date('d/m/Y', time());

		$para = $usuario['email'];
		$asunto = 'Solisitud de Cambio de contraseña';

		if (mail($para, $asunto, utf8_decode($message), $header))
			echo "<script type='text/javascript'>alert('Emos enviado un correo con el codigo para resstablecer tu contraseña, por favor revisa en spam');</script>";
		echo "<script type='text/javascript'>window.location.href='../olvide_pass.php';</script>";

		var_dump($usuario);
		die();


	} else {
		// mensaje de error
		$_SESSION['errores'] = "El correo no portenece a nustros usuarios regustros";
	}

	
}

header('Location: ../olvide_pass.php');

