
<?php 
#conectar base de datos#

$conexion = new mysqli("localhost","villa","villa","mjslt");


if (mysqli_connect_errno()) {
    
    echo "Fallo al conectar a la base de datos" . mysqli_connect_error() ;
    }else{
        echo "Conexion exitosa  ". date("Y-m-d H:i:s");
    }
    
   
// codificacion de caracteres 


mysqli_set_charset($conexion, "utf8");

?>