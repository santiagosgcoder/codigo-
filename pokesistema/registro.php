<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "include/head.php"?>
</head>
<body>
	<section id="container">
        <form action="" method="post">
            <h3 class="h33" >User register</h3>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido">
            <label for="correo">Correo Electronico</label>
            <input type="text" name="correo" id="correo" placeholder="Ingrese su correo">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" placeholder="Ingrese su nombre de usuario">
            <label for="contraseña">Contraseña</label>
            <input type="password" name="contraseña" id="contraseña" placeholder="Ingrese su contraseña">
            <button type="submit" class="buttom_save"><i class="fa-solid fa-download"></i> CREAR USUARIO</button>
        </form>
	</section>
    <div>
                <a href="index.php"><i class="fa-solid fa-arrow-left-long"></i> REGRESAR</a>
            </div> 
</body>
</html>

<?php 

session_start();

include "../conexion_pokemon.php"; 

if (!empty($_POST)) {
   
    if (empty($_POST['nombre']) ||  empty($_POST['apellido']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['contraseña']) ) {

        print "<script> alert('Llena todos los campos'); </script>";

    }else {


        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
       
       
    

      $query_dats = mysqli_query($conextion,"SELECT * FROM usuarios WHERE usuario = '$usuario' OR correo = '$correo'");
      $fetch = mysqli_fetch_array($query_dats);
      
      if ($fetch > 0) {

        print "<script> alert('Este usuario se encuentra en uso'); </script>";
          
      }else {
          
            $data_insert = mysqli_query($conextion,"INSERT INTO usuarios(nombre,usuario,apellido,correo,contraseña)
                                                                VALUES('$nombre','$usuario','$apellido','$correo','$contraseña')");

    

            if ($data_insert) {

                print "<script> alert('Datos almacenados'); </script>";

            }else {
                print "<script> alert('Ocurrió un error'); </script>";
            }
      }

        
    }
}
?>

