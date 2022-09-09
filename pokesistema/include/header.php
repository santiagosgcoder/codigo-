<?php
if(empty($_SESSION['active']))
{
	header('location: ../');
	
}
?>
<header>
		<div class="header">
			<div>
                <h1>Bienvenido a pokemon, <?php echo $_SESSION['nombre']." ".$_SESSION['apellido'];?> </h1>
                <a href="salir.php">SALIR</a>
                <h1 style="text-align:center ;">POKEMON'S</h1>
			</div>
		</div>
		
</header>  

        

