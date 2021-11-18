<?php
if(isset($_POST)){
	
	// Conexión a la base de datos
    require_once '../php/conexion.php';

	// Recorger los valores del formulario de actulizacion
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']) : false;
    $password_hash = isset($_POST['password_hash']) ? mysqli_real_escape_string($db, $_POST['password_hash']) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;
    $password2 = isset($_POST['password2']) ? mysqli_real_escape_string($db, $_POST['password2']) : false;
 




    // Consulta para comprobar las credenciales del usuario
	$sql = "SELECT * FROM usuarios WHERE email = '$email'";
	$login = mysqli_query($db, $sql);
	

  
	// Array de errores
	$errores = array();

	if($login && mysqli_num_rows($login) == 1){
		$usuario = mysqli_fetch_assoc($login);


        if ($password_hash == $usuario['password']){
            $verify= true;

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

            $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

        
			//actualizar el usuario en la base de datos  (con la contraseña encriptada)

            $sql = "UPDATE usuarios SET password = '$password_segura' WHERE id = '$usuario[id]'";

            $guardar = mysqli_query($db, $sql);

            if($guardar = true  ){
              
              
                $_SESSION['completado'] = "La contraseña se ha actualizado correctamente";

                header('Location: ../index.php');

               

                

            }else{
                // Si algo falla enviar una sesión con el fallo
                  
                $_SESSION['errores']['general'] = "Fallo al actualizar la contraseña";

                
           
            }





        

        }else{
            $verify = false;
            $_SESSION['errores'] = "la contraseña o el hash no son correctos";
        }
        

       
        

	}else{
		// mensaje de error
		$_SESSION['errores'] = "Error al actualizar";

    }
   

  
   
		
	
}

header('Location: ../olvide_pass.php');

