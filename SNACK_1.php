<!--  SNACK 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra
di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 -->
<?php 
 $partite = [
     [
         'casa' => "Milano",
         'ospite' => "Roma",
         "punti" => "40 - 50"
     ],
     [
         'casa' => "Palermo",
         'ospite' => "Catania",
         "punti" => "75 - 40"
     ],
     [
         'casa' => "Napoli",
         'ospite' => "Palermo",
         "punti" => "30 - 50"
     ],
     [
         'casa' => "Pisa",
         'ospite' => "Roma",
         "punti" => "50 - 45"
     ],
    ];
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK 1</title>
</head>

<body>
    <?php foreach ($partite as $partita){
        ?>
    <ol>
        <li><?php $partita["casa"] . ' - '. $partita["ospite"] ?><br> <?php $partita["punti"] ?></li>
    </ol>
    <?php
    }
    ?>
</body>

</html>