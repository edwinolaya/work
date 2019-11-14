<?php
session_start();

$bd_host = "localhost";
$bd_base = "hospitalrsangil";
$user="root";
$pass = 'Mari$cal23';
$con = new mysqli($bd_host, $user, $pass, $bd_base);

/* if ($con) {
    echo "Conexion bien";
} else {
    echo "mal";
}*/

//mysql_select_db($bd_base, $con);  

?>

