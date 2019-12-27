<?php 
    $conection = new mysqli('localhost', 'root', 'root', 'bgtwebcamp');

    if($conection->connect_error){
        echo $error -> $conection->connect_error;
    }
?>