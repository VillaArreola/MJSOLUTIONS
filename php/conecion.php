
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



// consulta de sql


$consulta = mysqli_query($conexion, "SELECT * FROM usuarios ");

  
    while ( $usuario = mysqli_fetch_assoc($consulta)) {
       
       echo  "<h2>" . $usuario ['email'] . " </h2>" ;
       echo  "<h2>" . $usuario ['nombre'] . " </h2>" ;
       echo  $usuario ['nombre'] ;
    }

    


    //insertar en la base de datos 


    $sql = "INSERT INTO usuarios values ( null , ' adminmj ', 'solutions', 'mjsolutions1@solutions.com', 'mj1234')";


    $insert = mysqli_query($conexion, $sql);

    if ($insert) {
        echo "Se inserto correctamente";
    }else{
        echo "No se inserto correctamente" . mysqli_error($conexion) ;

    }



    echo " <h1> videos </h1>"  ;



    // leer vichero

    









?>