
<?php 
#conectar base de datos#

$server = "localhost";
$username = "root";
$password = "";
$database = "mjslt";

$db = mysqli_connect($server, $username, $password, $database);


    
   
// codificacion de caracteres 


mysqli_set_charset($db, "utf8");



//iniciar sesion

session_start();


?>