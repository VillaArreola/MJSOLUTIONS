<?php
if(isset($_POST)){
	
	// Conexión a la base de datos
	require_once '../php/conexion.php';

	// Iniciar sesión
	if(!isset($_SESSION)){
		session_start();
	}
	
	// Recorger los valores del formulario de registro
	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
	$apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
	$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $tel = isset($_POST['tel']) ? mysqli_real_escape_string($db, trim($_POST['tel'])) : false;
	$password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;
    $password2 = isset($_POST['password2']) ? mysqli_real_escape_string($db, $_POST['password2']) : false;

	// Array de errores
	$errores = array();
	
	// Validar los datos antes de guardarlos en la base de datos
	// Validar campo nombre
	if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['nombre'] = "El nombre no es válido";
	}
	
	// Validar apellidos
	if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
		$apellidos_validado = true;
	}else{
		$apellidos_validado = false;
		$errores['apellidos'] = "Los apellidos no son válido";
	}
	
	// Validar el email
	if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
		$email_validado = true;
	}else{
		$email_validado = false;
		$errores['email'] = "El email no es válido";
	}
	
	// Validar la contraseña
	if(!empty($password)){
		$password_validado = true;
	}else{
		$password_validado = false;
		$errores['password'] = "La contraseña está vacía";
	}

    // Validar la contraseña
	if(!empty($password2)){
		$password_validado = true;
	}else{
		$password_validado = false;
		$errores['password2'] = "La contraseña está vacía";
	}

    // Validar que las contraseñas coincidan
    if($password == $password2){
        $password_validado = true;
    }else{
        $password_validado = false;
        $errores['password2'] = "Las contraseñas no coinciden";
    }
	
	
	$guardar_usuario = false;
	
	if(count($errores) == 0){
		$guardar_usuario = true;
		
		// Cifrar la contraseña
		$password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
		
		// INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
		$sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$tel',  '$password_segura', CURDATE());";
		$guardar = mysqli_query($db, $sql);
		
	//var_dump(mysqli_error($db));
		//die();
		
		if($guardar){
			$_SESSION['completado'] = "El registro se ha completado con éxito";
            header('Location: ../index.php ');
		}else{
			$_SESSION['errores']['general'] = "Fallo al guardar el usuario!!";
		}
		
	}else{
		$_SESSION['errores'] = $errores;
	}
}


