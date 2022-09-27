<?php

$host = "localhost";
$user = "root";
$password = "root";
$datbases = "pokemon_api";


$con = mysqli_connect($host,$user,$password,$datbases);


echo ($con) ? "conexion" : "no hubo conxn";


?>