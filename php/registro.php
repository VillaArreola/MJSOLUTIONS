


<?php 

session_start();

if(isset($_POST['submit'])){

    var_dump($_POST);

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if(!empty($nombre) && !empty($apellido) && !empty($email) && !empty($password) && !empty($password2)){
        if($password == $password2){
            $password = md5($password);

            $errores = array();


            $sql = "INSERT INTO usuarios (id, nombre, apellidos, email, tel,  password) VALUES ('', '$nombre', '$apellido', '$email', '$tel', '$password')";
            $consulta = mysqli_query($db, $sql);
            if($consulta){
                echo "Registro exitoso";
            }else{
                $errores[] = "Error al registrarse";
               
            }
        }else{
            $errores[] = "Las contraseñas no coinciden";
           
        }
    }else{
        $errores[] = "Rellena todos los campos obligatorios";
      
    }

    if(count($errores) == 0){
        $_SESSION['usuario'] = $nombre;
        header('Location: index.php');
    }else{
        $_SESSION['errores'] = $errores;
        header('Location: ../registro.php');
    }

}