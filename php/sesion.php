<?php 

include_once "../conex.php";

session_start();

if (!empty($_SESSION['active'])) {

    header("location: ../index.php");

}else{

    if (!empty($_POST)) {
        
        if (empty($_POST['nombreU']) || empty($_POST['contraseña'])) {

           print  '<script> alert("Llene todos los campos");</script>';
                   
        } else {
            
            $nombreU = $_POST['nombreU'];
            $pass = $_POST['contraseña'];

            $query_poke = mysqli_query($con,"SELECT * FROM usuarios WHERE  usuario = '$nombreU'  AND  contraseña = '$pass'");
            $row = mysqli_num_rows($query_poke);

           if ($row > 0)
           
           { 
               
          $datos = mysqli_fetch_assoc($query_poke);
           
           $_SESSION['active'] = true;
           $_SESSION['Userid'] = $datos['id'];
           $_SESSION['nombre'] = $datos['nombre'];
           $_SESSION['USER']   = $datos['usuario']; 
           $_SESSION['apellido'] = $datos['apellido'];
           $_SESSION['correo']   = $datos['correo'];
           $_SESSION['password'] = $datos['contraseña'];


           header("location: ../index.php"); 

        
           }else {

            print  '<script> alert("usuario o contraseña incorrectos");</script>';
                   
           }

        }
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css.css">
    <title>LoGiN</title>
</head>
<body>
    <section class="container">
        <form   action="" method="post">
            <h3>Inicio de sesión</h3>
            <label for="nombre">Nombre Usuario:</label>
            <input type="text" id="nombreU" name="nombreU" placeholder="Ingrese su nombre">
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña"  name="contraseña" placeholder="Ingrese su contraseña">
            <input type="submit" name="Enviar" value="Ingresar">
            
        </form>
    </section>

    
    
</body>
</html>