<?php 


if (mysqli_connect_errno()) {
    
    echo "Fallo al conectar a la base de datos" . mysqli_connect_error() ;
    }else{
        echo "Conexion exitosa  ". date("Y-m-d H:i:s");
    }
    


?>


#insertar datos a productos

