



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pokesistema/csss/style.css">
    <title>Document</title>
</head>
<header>
    
</header>
<body>
    <section id="contain">
        
        <form action="" method="post">
            <h3>Login</h3>
            <img src="pokesistema/images/main-qimg-d16fbd5d5a2beb4b9613177ba0183101.webp" alt="logueo">

            <input type="text" name="usuario"  placeholder="username">
            <input type="password" name="contraseña" placeholder="Password">
            <div><a class="registro" href="pokesistema/registro.php">¿No tienes cuenta?</a></div>
            <input type="submit" onclick="" value="INGRESAR">
            
        </form>
 
    </section>
      
</body>
</html>

<?php 


include_once "conexion_pokemon.php";

session_start();

if (!empty($_SESSION['active'])) {

    header('location: pokesistema/');

}else{

    if (!empty($_POST)) {

       if (empty($_POST['usuario']) || empty($_POST['contraseña'])) {

        print "<script> alert('Llena todos los campos'); </script>";
           
       }else{

            $user = $_POST['usuario'];
            $contraseña = $_POST['contraseña'];


            $query = mysqli_query($conextion, "SELECT * FROM usuarios WHERE usuario = '$user' AND contraseña = '$contraseña'");
            mysqli_close($conextion);
            $rows = mysqli_num_rows($query);
           
            if ($rows > 0) {
                
                $dats = mysqli_fetch_array($query);

                $_SESSION['active']   = true;
                $_SESSION['idUser']   = $dats['id'];
                $_SESSION['apellido'] = $dats['apellido'];
                $_SESSION['nombre']   = $dats['nombre'];
                $_SESSION['password'] = $dats['contraseña'];
                $_SESSION['correo']   = $dats['correo'];
                $_SESSION['user']     = $dats['usuario'];

                header('location: pokesistema/');

            }else {

                print "<script> alert('contraseña o usuario incorrectos'); </script>";
                
                session_destroy();
                 
            }


       }
    }

}


?>