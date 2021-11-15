<?php

//iniciar session




require_once '../php/conexion.php';


//iniciar session si no esta iniciada
if(!isset($_SESSION)){
	session_start();
}


// Recoger datos del formulario
if(isset($_POST)){
	
	//borrar error de session
	if(isset($_SESSION['error_login'])){
		unset($_SESSION['error_login']);
	}
	

	// Recoger datos del formulario
	$email = trim($_POST['email']);
	$password = $_POST['password'];
	
	// Consulta para comprobar las credenciales del usuario
	$sql = "SELECT * FROM usuarios WHERE email = '$email'";
	$login = mysqli_query($db, $sql);
	
	if($login && mysqli_num_rows($login) == 1){
		$usuario = mysqli_fetch_assoc($login);
		
		// Comprobar la contraseña
		$verify = password_verify($password, $usuario['password']);
		
		if($verify){
			// Utilizar una sesión para guardar los datos del usuario logueado
			$_SESSION['usuario'] = $usuario;
			header('Location: ../login.php');
			echo '<h1>Login correcto</h1>';

			
		}else{
			// Si algo falla enviar una sesión con el fallo
			$_SESSION['error_login'] = "Usuario o contraseña Incorrectos!!";
		}
	}else{
		// mensaje de error
		$_SESSION['error_login'] = "correo desconocido!!";
	}
	
}

// Redirigir al index.php
// Redirigir al index.php
header('Location: ../login.php');
