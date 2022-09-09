<?php

$host = 'localhost';
$user = 'root';
$pasw = 'root';
$dabase = 'pokemon_api';

$conextion = @mysqli_connect($host,$user,$pasw,$dabase);

if ($conextion) {
    echo 'en conexion';
}else {
    echo 'no estamos conectados';
}






?>