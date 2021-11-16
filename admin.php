
<?php include 'includes/cabecera.php'?>

<?php include 'includes/nav-menu.php'?>



<?php 

if (mysqli_connect_errno()) {
    
    echo "Fallo al conectar a la base de datos" . mysqli_connect_error() ;
    }else{
        echo "Conexion exitosa  ". date("Y-m-d H:i:s <br>");
    }

   echo "<br>";


?>







<?php

//conseguir usuarios

$sql = "SELECT * FROM usuarios";
$resultado = $db->query($sql);
$usuarios = $resultado->fetch_all(MYSQLI_ASSOC);









for ($i=0; $i < count($usuarios) ; $i++) { 
    echo $usuarios[$i]['nombre'] . " " . $usuarios[$i]['apellidos'] ." " . $usuarios[$i]['email'] ." ". $usuarios[$i]['tel'] . " ".$usuarios[$i]['fecha'] ." ". "<br>";
}




?>










<?php include 'includes/footer.php'?>
