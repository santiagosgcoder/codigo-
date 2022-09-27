<?php 

include_once "conex.php";

session_start();

if(empty($_SESSION['active']))
{   
   header('Location: ./sesion.php');

  }

$get = $_GET['url'];

$ur = $get;

$get_file = file_get_contents($ur);
$j_son = json_decode($get_file, true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
    <script type="text/javascript" src="js/iconos.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <title>Pokemon</title>
</head>
<body class="cont">
    <section>
        <div>
           <ol type="I">
               <li><?php echo $j_son['abilities'][0]['ability']['name'] ?></li>
               <li><?php echo $j_son['abilities'][1]['ability']['name'] ?></li>
           </ol>
        </div>
        <div class="div">
            <img src="<?php echo $j_son['sprites']['front_shiny']?>" alt="Pokemon">
            <img src="<?php echo $j_son['sprites']['back_default']?>" alt="Pokemon">
            <img src="<?php echo $j_son['sprites']['front_default']?>" alt="Pokemon">
            
        </div> 

        <div>
            <ol type="I">
                <li><?php echo $j_son['abilities'][0]['ability']['name'] ?></li>
                <li><?php echo $j_son['abilities'][1]['ability']['name'] ?></li>
            </ol>
            <div>
                <img src="<?php echo $j_son['sprites']['front_shiny']?>" alt="Pokemon">
                <img src="<?php echo $j_son['sprites']['back_default']?>" alt="Pokemon">
                <img src="<?php echo $j_son['sprites']['front_default']?>" alt="Pokemon">
            </div>
        </div>
      
        <a class="a" href="../index.php" > <i class="fa-solid fa-arrow-left"></i>  View all pokemon's</a>   
    </section>
</body>
</html>