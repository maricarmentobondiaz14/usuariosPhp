<?php
function conectar(){
    $user = "root";
    $pass = "";
    $host = "127.0.0.1";
    $connection = mysqli_connect($host, $user, $pass);
    $datab="usuario";

    $db = mysqli_select_db($connection,$datab);
    if(!$db) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
    return $db;
}



?>