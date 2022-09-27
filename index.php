<?php

session_start();

$file = "https://pokeapi.co/api/v2/pokemon/";
$url = file_get_contents($file, true);
$json = json_decode($url, true);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./php/css.css">
    <title>pokeapi</title>
</head>
<body>
    <table class="table" >
        <tbody>
            <colgroup> 
            <col span="7" style="background: orange;">
            <col> 
            </colgroup>
            <tr>
                <th rowspan="5" style="background:yellow ;">POKEMONS</th>
                <th colspan="6" style="background:yellow;">POKEMONS</th>   
            </tr> 
            <tr>
                
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/1/"><?php echo $json['results'][0]['name']?></a></td>  
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/2/"><?php echo $json['results'][1]['name'] ?></a></td>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/3/"><?php echo $json['results'][2]['name'] ?></a></td>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/4/"><?php echo $json['results'][3]['name'] ?></a></td>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/5/"><?php echo $json['results'][4]['name'] ?></a></td>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/6/""><?php echo $json['results'][5]['name'] ?></a></td>
            </tr>
            <tr>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/7/""><?php echo $json['results'][6]['name'] ?></a></td>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/8/""><?php echo $json['results'][7]['name'] ?></a></td>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/9/""><?php echo $json['results'][8]['name'] ?></a></td>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/10/""><?php echo $json['results'][9]['name'] ?></a></td>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/11/""><?php echo $json['results'][10]['name'] ?></a></td>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/12/""><?php echo $json['results'][11]['name'] ?></a></td>
            </tr>
            <tr>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/13/""><?php echo $json['results'][12]['name'] ?></a></td>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/14/""><?php echo $json['results'][13]['name'] ?></a></td>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/15/""><?php echo $json['results'][14]['name'] ?></a></td>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/16/""><?php echo $json['results'][15]['name'] ?></a></td>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/17/""><?php echo $json['results'][16]['name'] ?></a></td>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/18/""><?php echo $json['results'][17]['name'] ?></a></td>
            </tr>
            <tr>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/19/""><?php echo $json['results'][18]['name'] ?></a></td>
                <td><a href="./php/abilites.php?url=https://pokeapi.co/api/v2/pokemon/20/""><?php echo $json['results'][19]['name'] ?></a></td>
               
            </tr>

        </tbody>
    </table>
</body>
</html>